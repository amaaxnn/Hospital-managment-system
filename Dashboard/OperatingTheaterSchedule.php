<?php
include 'home.php'; //In here i have include the home page 
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'links.php'; ?>

</head>

<style>

.wrapper{
    top:88px;
    left:30%;
    padding-bottom:20px;
    position: relative;
    max-width: 700px;
    max-height:700px;
    width: 100%;
    background:rgba(240, 249, 252, 0.6);
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.wrapper h2{
    margin-top:-8%;
    text-align:center;
    padding-bottom:10px;
    position: relative;
    font-size: 22px;
    font-weight: 510;
    color: #333;
}

.wrapper form{
  margin-top: 4px;
}


.wrapper form .input-box{
  height: 38px;
  margin: 15px 0;
}

.wrapper form label{
    color:black;
}


form .input-box input{
  height: 90%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 16px;
  font-weight: 400;
  color: #1f1e1e;
  border: 1px solid #EEEEEE;
  border-bottom-width: 2.5px;
  border-radius: 4px;
}



.wrapper form .input-box label{
    margin-left:2%;
} 

.input-box input:focus,
.input-box input:valid{
  border-color:#fff;
}

form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}

/* add button css */
.staffsched-btn{
    width: 90%;
    margin-top: 30px;
    max-width: 60px;
    cursor: pointer; 
    border:0px;
    display:inline;
    content:space-beteen; 
    border-radius:7px;       
}

    /* add button css style query */
 .staffsched-btn .add-btn {
        font-size:17px;
        margin-top:2%;
        margin-bottom:3%;
        margin-right:2px;
        width:70px;
        margin-left:1%;
        border:0px;
        height:37px;
        max-width:100px;
        background:#2979FF;
        color:white;
        cursor: pointer;
        border-radius:7px;   
    }

  /* this anger link to go back to record list page */
 .wrapper form  .backto a{
  text-align: center;
  margin-left:26%;
  font-size:13px;
  padding:0%;
  margin-bottom:0%;
  text-decoration:none;

}
</style>

<body>
<!-- operating room form start here -->
<div class="wrapper">
    <form action="#" method="post">
    <h2>OPERATING THEATER SCHEDULE INFORMATION</h2>
    <div class="backto">
        <a href="managementOperatingtheatrschd.php">Back to Operating Theater Schedules Record List</a>
    </div>

      <div class="input-box" style="margin-top:6%;">
        <label for="">Operation ID</label>
        <input type="text" placeholder="Enter Operation No" required name="Operation_ID" >
      </div><br>

      <div class="input-box" style="margin-top:6%;">
        <label for="">Patient ID</label>
        <input type="text" placeholder="Enter Patient ID" required name="pat_ID" >
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Doctor ID</label>
        <input type="text"  placeholder="Enter Doctor ID" name="Doc_ID">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Time</label>
        <input type="text"  placeholder="Time" name="Op_time">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Date</label>
        <input type="date"  placeholder="Date" name="Op_date">
      </div><br>

      
<!-- insert button  -->
      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="Insert" value="ADD">
      </div>
      
    </form>
  </div>

</body>
</html>
<!-- operating theater schedule form end here -->


<!-- Here insert php code start here -->
<?php

include 'Connection.php'; //create connection
    //assign add button name here
    if(isset($_POST['Insert']))
    {
    // create the variable 
      $Operation_ID=$_POST['Operation_ID'];
      $pat_ID=$_POST['pat_ID'];
      $Doc_ID=$_POST['Doc_ID'];
      $Op_time=$_POST['Op_time'];
      $Op_date=$_POST['Op_date'];

//   insert query
  $sql = "INSERT into `operating_room_schedules`(`Operation_ID`, `pat_ID`, `Doc_ID`, `Op_time`,`Op_date`) 
  VALUES('$Operation_ID','$pat_ID','$Doc_ID','$Op_time','$Op_date')";
  
  $result=mysqli_query($con,$sql);

  if($result)
  {
    ?> 
    <!--displaying a pop up message-->
    <script>
       alert("Record has been Insert Successful");
    </script>
    <?php
  }
  else
  {
    ?> 
    <!--displaying a pop up message-->
    <script>
        alert("Data is not added");
    </script>
    <?php
  }
}

?>
<!-- Insert php query end here-->