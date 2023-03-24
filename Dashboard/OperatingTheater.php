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
    top:95px;
    left:30%;
    padding-bottom:40px;
    position: relative;
    max-width: 700px;
    max-height:50%;
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
  height:600px;
}


.wrapper form .input-box{
  height: 38px;
  margin: 15px 0;
}

.wrapper form label{
    color:black;
}


form .input-box input{
  height: 85%;
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
  margin-left:31%;
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
    <h2>OPERATING THEATER INFORMATION</h2>
    <div class="backto">
        <a href="managementoperatingtheater.php">Back to Operating Theater Record List</a>
    </div>
      <div class="input-box" style="margin-top:4%;">
        <label for="">Operation No</label>
        <input type="text" placeholder="Enter Operation ID" required name="Operation_No" >
      </div><br>

      <div class="input-box">
      <label for="">Operation Name</label>
        <input type="text" list="operlist" placeholder="Enter Operation Name" name="Operation_Name">
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
        <input type="text"  placeholder="Enter Staff ID" name="Staff_ID">
      </div><br>

      <div class="input-box">
      <label for="">Patient ID</label>
        <input type="text"  placeholder="Enter Patient ID" name="Patient_ID">
      </div><br>

      <div class="input-box" >
      <label for="">Doctor ID</label>
        <input type="text"  placeholder="Enter Doctor ID" name="Doc_ID"><br><br>
        <!-- arogya team doctor names  -->
<!-- insert button  -->
      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="Insert" value="ADD">
      </div>
    </form>
  </div>

</body>
</html>
<!-- room form end here -->


<!-- Here insert php code start here -->
<?php

include 'Connection.php'; //create connection
    //assign add button name here
    if(isset($_POST['Insert']))
    {
    // create the variable 
      $Operation_No=$_POST['Operation_No'];
      $Operation_Name=$_POST['Operation_Name'];
      $Staff_ID=$_POST['Staff_ID'];
      $Patient_ID=$_POST['Patient_ID'];
      $Doc_ID=$_POST['Doc_ID'];

//   insert query
  $sql = "INSERT into `operating_room`(`Operation_No`, `Operation_Name`,`Staff_ID`, `Patient_ID` , `Doc_ID`) 
  VALUES('$Operation_No','$Operation_Name','$Staff_ID','$Patient_ID','$Doc_ID')";
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