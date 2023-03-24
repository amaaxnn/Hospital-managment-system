<?php
   include ('home.php'); //dashoard home page

   include 'Connection.php'; //create connection

  //  assigning 
if(isset($_POST['update'])){
     
      $Staff_ID=$_POST['Staff_ID'];
// writing database table data name
  $query="UPDATE staffs SET Staff_Name='$_POST[Staff_Name]',S_DOB='$_POST[S_DOB]',Staff_Addrss='$_POST[Staff_Addrss]',
  Staff_gender='$_POST[Staff_gender]',Staff_Telno='$_POST[Staff_Telno]' where Staff_ID='$_POST[Staff_ID]'";

  $query_run=mysqli_query($con,$query);
  if($query_run){

    ?>

   <script> //this popup alert after click update btn it will show success message

    alert("Record Updated Successfully");
    window.location.href='managementstaff.php';

   </script>
   
  <?php

  }
  else{
 ?>

  <script> //this popup alert after click update btn it will show error message

  alert("Not Updated");
  window.location.href='managementstaff.php?error';

  </script>

  <?php
  }
  }
  $result=mysqli_query($con,"SELECT * FROM staffs where Staff_ID='".$_GET['Staff_ID']."'"); //this is database table name 

  $row=mysqli_fetch_array($result); //this code for fetch datas from staff form to getting information
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
    max-height:790px;
    width: 100%;
    background:#f0f9fc;
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
        max-width: 60px;
        cursor: pointer; 
        border:0px;
        display:inline;
        content:space-beteen; 
        border-radius:7px;  
        
    }

 .staffsched-btn .add-btn {
        margin-top:10px;
        font-size:16px;
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
<!-- Staff update form start here -->
  <div class="wrapper">
          <form action="#" method="post">
          <h2>STAFF UPDATING INFORMATION</h2>
            <div class="input-box" style="margin-top:6%;" >
              <label for="">Staff ID</label>
                              <!-- in here i have Getting data from staff insert form to display in input field datas -->
              <input type="text" placeholder="Enter Staff ID" name="Staff_ID" value="<?php echo $row["Staff_ID"]; ?> " required>
            </div>

            <div class="input-box" style="margin-top:6.5%;">
            <label for="">Staff Name</label>
              <input type="text" placeholder="Enter Staff Name" name="Staff_Name" value="<?php echo $row["Staff_Name"];?>">
            </div>

            <div class="input-box" style="margin-top:6.5%;">
            <label for="">Staff Birth Date</label>
              <input type="date" placeholder="Enter Staff Date of Birth" name="S_DOB" value="<?php echo $row["S_DOB"];?>">
            </div>

            <div class="input-box" style="margin-top:6.5%;">
            <label for="">Staff Address</label>
              <input type="text" placeholder="Enter Staff Adrress" name="Staff_Addrss" value="<?php echo $row["Staff_Addrss"];?>">
            </div>

            <div class="input-box" style="margin-top:6.5%;">
              <label for="">Gender</label>
              <input type="text" placeholder="Enter Staff Gender" name="Staff_gender" value="<?php echo $row["Staff_gender"];?>">
            </div>

            <div class="input-box" style="margin-top:6.5%;">
              <label for="">Staff Phone No</label>
              <input type="text" placeholder="Enter Staff Phone No" name="Staff_Telno" value="<?php echo $row["Staff_Telno"];?>">
            </div>

            <!-- update btn here -->
            <div class="staffsched-btn"> 
                <input type="submit" class="add-btn" name="update" value="UPDATE"> 
            </div>  
          </form>    
  </div>
<!-- staff form end here -->
</body>
</html>


