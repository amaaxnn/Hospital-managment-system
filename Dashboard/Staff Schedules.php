<?php
include 'home.php';
?>


<!DOCTYPE html>
<html lang="en">
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
    margin:0%;
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
  margin-left:32%;
  font-size:13px;
  padding:0%;
  margin-top:0%;
  margin-bottom:0%;
  text-decoration:none;

}
</style>


<body>
<div class="wrapper">
    <form action="#" method="post">
    <h2>STAFF SCHEDULES INFORMATION</h2>
    <div class="backto">
        <a href="managementStaffschedule.php">Back to Staff Schedules Record List</a>
    </div>
      <div class="input-box">
        <label for="">Staff Schedule No</label>
        <input type="text" name="StaffscheduleNo" placeholder="Enter Staff Schedule No" required>
      </div><br>

      <div class="input-box">
      <label for="">Staff ID</label>
        <input type="text" name="StaffID" placeholder="Enter Staff ID">
      </div><br>

      <div class="input-box">
      <label for="">Room ID</label>
        <input type="text" name="RoomID" placeholder="Enter Room ID" >
      </div><br>

      <div class="input-box">
      <label for="">Schedule</label>
        <input type="text" name="Schedules" placeholder="Enter Schedules" >
      </div><br>

      <div class="input-box">
        <label for="">Time</label>
        <input type="time"element as --:-- (time range: 23:59AM). name="Time" placeholder="Enter Time">
      </div><br>

      <div class="input-box">
        <label for="">Date</label>
        <input type="date" name="Date" placeholder="Enter Date">
      </div><br>

      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="Insert" value="ADD">
      </div>
      
    </form>
  </div>
</body>
</html>


<?php
include 'Connection.php'; //create connection
//assign add button name here
if(isset($_POST['Insert']))
{
// create the variable 
  $StaffscheduleNo=$_POST['StaffscheduleNo'];
  $StaffID=$_POST['StaffID'];
  $RoomID=$_POST['RoomID'];
  $Schedules=$_POST['Schedules'];
  $Time=$_POST['Time'];
  $Date=$_POST['Date'];

  // writing the DB table datas name 
  $sql = "INSERT into `staff_schedules`(`staffschedule_no`, `staff_ID`, `room_ID`, `Schedule`, `Sch_time`, `Sch_date`) 
  VALUES ('$StaffscheduleNo','$StaffID','$RoomID','$Schedules','$Time','$Date')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    ?> 
    <!--displaying a pop up message-->
    <script>
       alert("Successfully Added");
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
