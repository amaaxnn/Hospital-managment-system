<?php
include ('home.php'); //dashboard home page include here

include 'Connection.php'; // connection file 

if(isset($_POST['Operation_ID'])){ // this attributes to get all the data's

    $room_ID=$_POST['Operation_ID'];

// update query
$query="UPDATE operating_room_schedules SET pat_ID='$_POST[pat_ID]',Doc_ID='$_POST[Doc_ID]',Op_time='$_POST[Op_time]',Op_date='$_POST[Op_date]' where Operation_ID='$_POST[Operation_ID]'";

// main function code to executing 
$query_run=mysqli_query($con,$query);

if($query_run){

    ?>
    <script>  // thiis is JS function to poppup message will be display

        alert("Record has been Updated"); // Condition  has true, this will be display 
        window.location.href='managementOperatingtheatrschd.php';

    </script>

    <?php
}
else{
    ?>
    <script>

        alert("Record has been Updated");
        window.location.href='managementOperatingtheatrschd.php';

    </script>

    <?php

}
}
$result=mysqli_query($con,"SELECT * FROM operating_room_schedules where Operation_ID='".$_GET['Operation_ID']."'"); // DB table name and where to write specific variables 

$row=mysqli_fetch_array($result);

?>
 

<html>
<head>
 <?php include 'links.php'?>
</head>

<style>
    /* staff FORM START HERE */

    .wrapper{
    top:88px;
    left:25%;
    padding-bottom:20px;
    position: relative;
    max-width: 750px;
    max-height:780px;
    width: 100%;
    background:#f0f9fc;
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
    margin-top:-4%;
    text-align:center;
    padding-bottom:5px;
    position: relative;
    font-size: 20px;
    font-weight: 510;
    color: #333;
}


.wrapper form label{
    color:black;
    margin:0%;
}

.wrapper form .input-box{
  height: 40px;
  margin: 13px 0;
}
form .input-box input{
  height: 80%;
  width: 100%;
  outline: none;
  padding: 0 10px;
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
        margin-bottom: 5%;
        max-width: 60px;
        cursor: pointer; 
        border:0px;
        display:inline;
        content:space-beteen; 
        border-radius:7px;         
    }

 .staffsched-btn .add-btn {
        margin-top:7px;
        font-size:16px;
        margin-bottom: 1%;
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
/* END HERE */
</style>

<body>
<!-- operating room form start here -->
<div class="wrapper">
    <form action="#" method="post">
    <h2>OPERATING THEATER SCHEDULE UPDATING INFORMATION</h2>

      <div class="input-box" style="margin-top:7%;">
        <label for="">Operation ID</label>
        <input type="text" placeholder="Enter Operation No" required name="Operation_ID" value="<?php echo $row['Operation_ID'];?>">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
        <label for="">Patient ID</label>
        <input type="text" placeholder="Enter Patient ID" required name="pat_ID" value="<?php echo $row['pat_ID'];?>">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Doctor ID</label>
        <input type="text" placeholder="Enter Doctor Name" name="Doc_ID" value="<?php echo $row['Doc_ID'];?>">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Time</label>
        <input type="text"  placeholder="Time" name="Op_time" value="<?php echo $row['Op_time'];?>">
      </div><br>

      <div class="input-box" style="margin-top:6%;">
      <label for="">Date</label>
        <input type="date"  placeholder="Date" name="Op_date" value="<?php echo $row['Op_date'];?>">
      </div><br>

      
<!-- update button  -->
      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div>
    </form>
  </div>

</body>
</html>


