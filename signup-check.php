<?php 
session_start(); // this session message code start here 
include "process.php"; //connection page 

if (isset($_POST['uname']) && isset($_POST['password']) //if username and password equal 
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){ //this coding is giving validation to the datas 
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
// validate user and pass
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name; //user == pass


	if (empty($uname)) { // if input field is empty 
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM `user_reg` WHERE user_name='$uname' "; // this writing database name 
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else{
           $sql2 = "INSERT INTO user_reg(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2)
		   {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else
		   {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}