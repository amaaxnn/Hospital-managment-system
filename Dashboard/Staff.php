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


    .wrapper{
    top:88px;
    left:25%;
    padding-bottom:20px;
    position: relative;
    max-width: 750px;
    max-height:790px;
    width: 100%;
    background:rgba(240, 249, 252, 0.6);
    padding: 60px 70px 10px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
    margin-top:-8%;
    text-align:center;
    padding-bottom:5px;
    position: relative;
    font-size: 22px;
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
  border:none;
}
form .input-box input{
  border:none;
  height: 80%;
  width: 100%;
  outline: none;
  padding: 0 10px;
  font-size: 16px;

  font-weight: 400;
  color: #1f1e1e;
  border: none;
  background
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

 .staffsched-btn .add-btn {
        margin-top:10px;
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

<!-- Staff form start here -->
<div class="wrapper">
    
    <form action="#" method="post">
    <h2>STAFF INFORMATION</h2>
    <div class="backto">
        <a href="managementstaff.php">Back to Staffs Record List</a>
    </div>
      <div class="input-box" style="margin-top:6%;" >
        <label for="">Staff ID</label>
        <input type="text"name="SID" placeholder="Enter Staff ID" required>
      </div>

      <div class="input-box" style="margin-top:6.5%;">
      <label for="">Staff Name</label>
        <input type="text" name="Name" placeholder="Enter Staff Name">
      </div>

      <div class="input-box" style="margin-top:6.5%;">
      <label for="">Staff Birth Date</label>
        <input type="date" name="DOB" placeholder="Enter Staff Date of Birth" >
      </div>

      <div class="input-box" style="margin-top:6.5%;">
      <label for="">Staff Address</label>
        <input type="text" name="Address" placeholder="Enter Staff Adrress">
      </div>

      <div class="input-box" style="margin-top:6.5%;">
        <label for="">Gender</label>
        <input type="text" name="gender" placeholder="Enter Staff Gender">
      </div>

      <div class="input-box" style="margin-top:6.5%;">
        <label for="">Staff Phone No</label>
        <input type="text" name="Phoneno" placeholder="Enter Staff Phone No">
      </div><br>

      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="Insert" value="ADD">
      </div>  
    </form>
</div>

</body>
</html>


<!-- In here php coding start here -->
<?php
              //database connection
            include 'Connection.php';
        //this is to Add the data in database 
           if(isset($_POST['Insert'])){
             
            //creating variable
            // fetch the input datas $_POST
            $SID=$_POST['SID'];
            $Name=$_POST['Name'];
            $DOB=$_POST['DOB'];
            $Address=$_POST['Address'];
            $gender=$_POST['gender'];
            $Phoneno=$_POST['Phoneno'];


      //sql query to add the data
      $sql = "insert into `staffs`(`Staff_ID`, `Staff_Name`, `S_DOB`, `Staff_Addrss`, `Staff_gender`, `Staff_Telno`) 
      VALUES ('$SID','$Name','$DOB','$Address','$gender','$Phoneno')";
        
        // execute the query
        $result = mysqli_query($con, $sql);

        if($result == TRUE) {
          ?> <!--displaying a pop up message-->
          <script>
             alert("Record has been Successfully");
          </script>
          <?php
        }else{
          ?> <!--displaying a pop up message-->
          <script>
              alert("Data is not added");
          </script>
          <?php
        }
    }
?>

