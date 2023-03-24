<?php
   include ('home.php');

   include 'Connection.php';

   if(isset($_POST['update'])){
     
      $staffschedule_no=$_POST['staffschedule_no'];

  $query="UPDATE staff_schedules SET staff_ID='$_POST[staff_ID]',room_ID='$_POST[room_ID]',Schedule='$_POST[Schedule]',
  Sch_time='$_POST[Sch_time]',Sch_date='$_POST[Sch_date]' where staffschedule_no='$_POST[staffschedule_no]'";

  $query_run=mysqli_query($con,$query);

  if($query_run){

    ?>

   <script> //this popup alert after click update btn it will show success message

    alert("Record Updated Successfully");
    window.location.href='managementStaffschedule.php'; //Redirect to to management page

   </script>
   
  <?php

  }
  else{

 ?>
  <script> //this popup alert after click update btn it will show error message

  alert("Not Updated");
  window.location.href='managementStaffschedule.php?error';

  </script>
  <?php
  }
  }
//this is database table name 
  $result=mysqli_query($con,"SELECT * FROM staff_schedules where staffschedule_no='".$_GET['staffschedule_no']."'"); 

  $row=mysqli_fetch_array($result); //this code for fetch datas from staff form to getting information
?>
 

<html>
<head>

  <?php include 'links.php'; ?>

</head>

<style>

.wrapper{
    top:96px;
    left:30%;
    padding-bottom:20px;
    position: relative;
    max-width: 700px;
    max-height:680px;
    width: 100%;
    background:#f0f9fc;
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
    margin-top:-8%;
    text-align:center;
    padding-bottom:20px;
    position: relative;
    font-size: 20px;
    font-weight: 510;
    color: #333;
}

.wrapper form{
  margin-top: 2px;
  
}

.wrapper form label{
    color:black;
}

.wrapper form .input-box{
  height: 38px;
  margin: 14.5px 0;
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
        font-size:15px;
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

</style>

<body>
    <!-- staff schedule form start here  -->
<div class="wrapper">
    <form action="#" method="post">
    <h2>STAFF SCHEDULES UPDATING INFORMATION</h2>
      <div class="input-box">
        <label for="">Staff Schedule No</label>
        <input type="text" placeholder="Enter Staff Schedule No" name="staffschedule_no" required  value="<?php echo $row["staffschedule_no"];?>">
      </div><br>

      <div class="input-box">
      <label for="">Staff ID</label>
        <input type="text"  placeholder="Enter Staff ID" name="staff_ID" value="<?php echo $row["staff_ID"];?>">
      </div><br>

      <div class="input-box">
      <label for="">Room ID</label>
        <input type="text" placeholder="Enter Room ID" name="room_ID" value="<?php echo $row["room_ID"];?>">
      </div><br>

      <div class="input-box">
      <label for="">Schedule</label>
        <input type="text" placeholder="Enter Schedules" name="Schedule" value="<?php echo $row["Schedule"];?>">
      </div><br>

      <div class="input-box">
        <label for="">Time</label>
        <input type="text"  placeholder="Enter Time" name="Sch_time" value="<?php echo $row["Sch_time"];?>">
      </div><br>

      <div class="input-box">
        <label for="">Date</label>
        <input type="date"  placeholder="Enter Date" name="Sch_date" value="<?php echo $row["Sch_date"];?>">
      </div><br><br>
        <!-- update button code here -->
      <div class="staffsched-btn"> 
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div>
      
    </form>
  </div>

</body>
</html>

