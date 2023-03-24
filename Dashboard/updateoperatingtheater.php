<?php
include ('home.php');

include 'Connection.php'; //include the connection file

if(isset($_POST['Operation_No'])){

    $room_ID=$_POST['Operation_No']; // this data to update the record

    // this is database attributes names 
$query="UPDATE operating_room SET Operation_Name='$_POST[Operation_Name]',Staff_ID='$_POST[Staff_ID]',Patient_ID='$_POST[Patient_ID]',Doc_ID='$_POST[Doc_ID]' 
where Operation_No='$_POST[Operation_No]'";

$query_run=mysqli_query($con,$query); //this code to run all the data 
if($query_run){

    ?>
    <script> //In here, i have write javvascrip coding 

        alert("Record has been Updated"); // this is message poppup
        window.location.href='managementoperatingtheater.php';

    </script>
    <?php
}
else{

    ?>
    <script>
        alert("Record has been Updated"); // error message poppup
        window.location.href='managementoperatingtheater.php';
    </script>
    <?php

}
}

$result=mysqli_query($con,"SELECT * FROM operating_room where Operation_No='".$_GET['Operation_No']."'"); //this is DB select table name and which data to update record 

$row=mysqli_fetch_array($result); //Function code

?> 
<!-- PHP UPDATE END HERE -->

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
    max-height:790px;
    width: 100%;
    background:#f0f9fc;
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
    margin-top:-5%;
    text-align:center;
    padding-bottom:15px;
    position: relative;
    font-size: 22px;
    font-weight: 510;
    color: #333;
}


.wrapper form label{
    color:black;
}
.wrapper form{
  margin-top: 4px;
  height:600px;
}


.wrapper form .input-box{
  height: 40px;
  margin: 15px 0;
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
        width: 100%;
        margin-top: 30px;
        margin-bottom: 5%;
        text-align:center;
        max-width: 70px;
        cursor: pointer; 
        border:0px;
        display:inline;
        content:space-beteen; 
        border-radius:7px;  
        
    }

 .staffsched-btn .add-btn {
        margin-top:10px;
        font-size:16px;
        margin-bottom: 3%; 
        width:70px;
        border:0px;
        text-align:center;
        height:37px;
        width:75px;
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
    <h2>OPERATING THEATER UPDATING INFORMATION</h2>
      <div class="input-box" style="margin-top:4%;">
        <label for="">Operation No</label>
        <input type="text" placeholder="Enter Operation ID" required name="Operation_No"  value="<?php echo $row["Operation_No"];?>" >
      </div><br>

      <div class="input-box">
      <label for="">Operation Name</label>
        <input type="text" list="operlist" placeholder="Enter Operation Name" name="Operation_Name" value="<?php echo $row["Operation_Name"];?>">
        <!-- operation surgery names  -->
        <datalist id="operlist">
                <option value="Heart Surgery Operation">
                <option value="Broken Bone Repair Operation">
                <option value="Heart Bypass Surgery Operation">
                <option value="skin graft Surgery Operation">
                <option value="ENT Repair Operation">
                <option value="Thoracic Operation">
                <option value="Gentral Operation">
                <option value="Diagnose Operation">
        </datalist>
      </div><br>

      <div class="input-box">
      <label for="">Staff ID</label>
        <input type="text"  placeholder="Enter Staff ID" name="Staff_ID" value="<?php echo $row["Staff_ID"];?>">
      </div><br>

      <div class="input-box">
      <label for="">Patient ID</label>
        <input type="text"  placeholder="Enter Patient ID" name="Patient_ID" value="<?php echo $row["Patient_ID"];?>">
      </div><br>

      <div class="input-box" >
      <label for="">Doctor ID</label>
        <input type="text"  placeholder="Enter Doctor ID" name="Doc_ID" value="<?php echo $row["Doc_ID"];?>"><br><br>

<!-- update button  -->
      <div class="staffsched-btn" style="text-align:center;">
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div>
      
    </form>
  </div>

</body>
</html>


