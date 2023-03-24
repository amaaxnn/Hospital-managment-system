<?php 
// message popup 
session_start(); 
include "Connection.php"; // create connection page

// assigning the value
if (isset($_POST['uname']) && isset($_POST['password'])) {

	// writing the function
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
// chekcking the user and pass correct
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	// if the coorect, this will be exectute 
	if (empty($uname)) {
		header("Location: System_Admin.php?error=User Name is required"); // give location 
	    exit();
		// or not this will be execting 
	}else if(empty($pass)){
        header("Location: System_Admin.php?error=Password is required");
	    exit();
	}else{

		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'"; //this is database table name 

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
			
		        exit();
			}
			else{
				header("Location: System_Admin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: System_Admin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: System_Admin.php"); //after click login button this page will be coming 
	exit();
}