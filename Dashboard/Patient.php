<?php
session_start();
// do stuff here
?>
<?php
   include ('home.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'links.php' ?>
</head>


<style>
    /* PATIENT FORM START HERE */

#Patients{
  
   padding-top:50px;
   margin-top:-65px;
  align-items: center;
  width:100%;
  height:100%;
  position:fixed;
  display:

}

form{
  
  max-width: 550%;
  width: 40%;
  height: 86%;
  margin:17vh auto 0 20%;
  padding: 20px;
  border-radius: 3px;
  box-sizing: border-box;
  border-radius: 10px;
  background: rgba(224, 242, 255, 0.6);
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
        justify-content: space-between;
        box-sizing:border-box;
        outline:solid 1px #EAEAEA;
        border:   #EFEFEF;
        border-radius: 3px;
        
        
    }

    /* input text box css style  */
    input{
        width:80%;
        margin-left:60px;
        border:none;
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
        font-size:15px;
        margin-right:10px;
        width:96px;
        margin-left:8%;
        height: 6%;
        max-width:100px;
        background:#2979FF;
        color:white;
        cursor: pointer;
        border-radius:5px;   
    }
  /* add btn style end */

  /* this anger link to go back to record list page */
.patient-form .backto a{
  text-align: center;
  margin-left:37%;
  font-size:13px;
  padding:0%;
  margin-top:0%;
  margin-bottom:0%;
  text-decoration:none;

}

/* END HERE */








</style>

<body>

<div id="Patients">
    <form action="" method="post" class="patient-form">
            <h1>PATIENTS INFORMATION</h1>
            <div class="backto">
                <a href="managementpatient.php">Back to Patients Record List</a>
            </div>
            <br>
            <label for="">Patient ID</label>
            <input type="text" id="PatientID" name="PatID" placeholder="Enter Patient ID">
            <small class="error"></small><br>
            <br>

            <label for="">Patient Name</label>
            <input type="text" id="PatientName" name="PatName" placeholder="Enter Patient Name">
            <small class="error"></small><br>
            <br>
            
            <label for="">Patient Birth Date</label>
            <input type="date" id="PatientDOB" name="PatDOB" placeholder="Enter Pateint Date of Birth">
            <small class="error"></small><br><br>

            <label for="">Patient Address</label>
            <input type="text" id="PatientAddress" name="PatAdd" placeholder="Enter Patient Adrress">
            <small class="error"></small><br><br>

            <label for="">Patient Phone No</label>
            <input type="text" id="PatientPhneNo" name="PatPhneno" placeholder="Enter Patient Phone No">
            <small class="error"></small><br><br>

            <label for="">Doctor Name</label>
            <input type="text" list="doclist" id="DoctorName" name="DocName" placeholder="Enter Doctor Name">
            <datalist id="doclist">
                <option value="Dr. Raj">
                <option value="Dr. Tanya">
                <option value="Dr. Mariyam">
                <option value="Dr. Alexia">
                <option value="Dr. Amaan">
                <option value="Dr. John">
            </datalist>
            <small class="error"></small><br><br>

            <div class="patient-btn">
           <input type="submit" class="add-btn" name="Insert" value="NEW ENTRY">
            </div>
</div>

</body>
</html>

<?php
              //database connection
            include 'Connection.php';
        //this is to Add the data in database 
           if(isset($_POST['Insert'])){       
          
            //creating variable
            $PatID=$_POST['PatID'];
            $PatName=$_POST['PatName'];
            $PatDOB=$_POST['PatDOB'];
            $PatAdd=$_POST['PatAdd'];
            $PatPhneno=$_POST['PatPhneno'];
            $DocName=$_POST['DocName'];
          //sql query to add the data
        $query = "insert into `patients`(`Pat_ID`, `Pat_Name`, `Pat_DOB`,`Pat_Addrss`, `Pat_Teleno`, `Doc_Name`) 
        VALUES ('$PatID','$PatName','$PatDOB','$PatAdd','$PatPhneno','$DocName')";
        $result = mysqli_query($con, $query);

        if($result==1)
        {
            echo "<script> alert('Record insert successfully'); </script>";

        }
        else
        {    
            echo "<script> alert('Not Insert Data'); </script>";
        }
    }
  ?>




   
