<?php

include ('home.php');

include 'Connection.php';

if(isset($_POST['Pat_ID'])){

    $Pat_ID=$_POST['Pat_ID'];


// sql query for patient update the data
$query = "UPDATE patients Set Pat_Name='$_POST[Pat_Name]', Pat_DOB='$_POST[Pat_DOB]', Pat_Addrss='$_POST[Pat_Addrss]',
Pat_Teleno='$_POST[Pat_Teleno]', Doc_Name='$_POST[Doc_Name]' where Pat_ID='$_POST[Pat_ID]'";


$query_run=mysqli_query($con,$query);

if($query_run==1){

    ?>

    <script>

        alert("Record has been Updated");
        window.location.href='managementpatient.php';

    </script>

    <?php
}else{
    ?>
    <script>
        alert("Not Updated");
    </script>
    <?php
}

}

$result=mysqli_query($con,"SELECT * FROM patients where Pat_ID='".$_GET['Pat_ID']."'");

$row=mysqli_fetch_array($result);

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'links.php' ?>
</head>


<style>
    /* PATIENT FORM START HERE */

#Patients{

   padding-top:40px;
   margin-top:-60px;
  align-items: center;
  width:100%;
  height:100%;
  position:fixed;

}

form{
  max-width: 550%;
  width: 40%;
  height: 85%;
  margin:17vh auto 0 20%;
  padding: 20px;
  border-radius: 3px;
  box-sizing: border-box;
  border-radius: 10px;
  background:#e0f2ff;
}

 h1 {
  margin-top:0;
  padding-bottom:10px;
  text-align:center;
  font-size: 20px;
}


/* this is for label text css style */
label{     
  display:block;
  padding: 0px 62px;
}

input, textarea{
        width:100%;
        margin-left: 30px;
        margin-right:30px;
        padding: 3px;
        box-sizing:border-box;
        outline:solid 1px #EAEAEA;
        border:   #EFEFEF;
        border-radius: 3px;
    }

    /* input text box css style  */
    input{
        width:80%;
        margin-left:60px;
    }
/* add button css */
.patient-btn{
        width: 90%;
        padding: 6px 10px;
        margin-top: 10px;
        max-width: 70px;
        cursor: pointer; 
        border:none;
        display:inline;
        content:space-beteen; 
        border-radius:5px;  
    }

.patient-btn :hover{
        border: 2px solid #1A237E;
    }

 .patient-btn .add-btn {
        margin-top:1px;
        margin-right:10px;
        width:70px;
        margin-left:8%;
        height: 6%;
        max-width:100px;
        background:#2979FF;
        color:white;
        cursor: pointer;
        border-radius:5px;  
       
    }

/* END HERE */
</style>

<body>
<div id="Patients">
    <form action="" method="post" class="patient-form">
            <h1>PATIENTS UPDATING INFORMATION</h1>
            <!-- update patient ofrm heading -->
            <label for="">Patient ID</label>
           <!-- update patient forms get data  -->
            <input type="text" id="PatientID" name="Pat_ID" value="<?php echo  $row['Pat_ID'];?>" 
            placeholder="Enter Patient ID">
            <small class="error"></small><br>
            <br>
            <label for="">Patient Name</label>
            <input type="text" id="PatientName" name="Pat_Name" value="<?php echo  $row['Pat_Name'];?>" 
            placeholder="Enter Patient Name">
            <small class="error"></small><br><br>
            <label for="">Patient Birth Date</label>
            <input type="date" id="PatientDOB" name="Pat_DOB" value="<?php echo  $row['Pat_DOB'];?>"
            placeholder="Enter Pateint Date of Birth">
            <small class="error"></small><br><br>
            <label for="">Patient Address</label>
            <input type="text" id="PatientAddress" name="Pat_Addrss" value="<?php echo  $row['Pat_Addrss'];?>"
            placeholder="Enter Patient Adrress">
            <small class="error"></small><br><br>
            <label for="">Patient Phone No</label>
            <input type="text" id="PatientPhneNo" name="Pat_Teleno" value="<?php echo  $row['Pat_Teleno'];?>" 
            placeholder="Enter Patient Phone No">
            <small class="error"></small><br><br>
            <label for="">Doctor Name</label>
            <input type="text" list="doclist" id="DoctorName" name="Doc_Name" value="<?php echo  $row['Doc_Name'];?>"
            placeholder="Enter Doctor Name">
            <datalist id="doclist">
                <option value="Dr. Raj">
                <option value="Dr. Tanya">
                <option value="Dr. Mariyam">
                <option value="Dr. Alexia">
                <option value="Dr. Amaan">
                <option value="Dr. John">
            </datalist>
            <small class="error"></small><br><br>

            <!-- update button  -->
            <div class="patient-btn">
           <input type="submit" class="add-btn" name="Insert" value="UPDATE">
            </div>
</div>

</body>
</html>

