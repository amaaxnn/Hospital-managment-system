<?php
include ('home.php'); //This is dashboard home page 

include 'Connection.php'; // In here i have include connection file

if(isset($_POST['update'])){ //this is update button to assign variable 

    $Doc_ID=$_POST['Doc_ID']; // in here this data to get the all input datas

// Here, i have writing databsse variable attributes name 
$query="UPDATE doctors SET 	Doc_Name='$_POST[Doc_Name]',Doc_Add='$_POST[Doc_Add]', 
Doc_phneno='$_POST[Doc_phneno]',Docemail='$_POST[Docemail]',Docspecialist='$_POST[Docspecialist]' where Doc_ID='$_POST[Doc_ID]'";  

$query_run=mysqli_query($con,$query); // this coding line is a main function to exectuing 

if($query_run){
?>

    <script> // here i have write javascript coding 

        alert("Reccord Updated Successfully");  //if that coding is true this code will be execte and display popup message
        window.location.href='managementdoctors.php'; //this popup message will be display in this mmention page 

    </script>

<?php
}
else{
?>
    <script>

    alert("Not Updated"); //   any error in this code, this popup message will be display
    window.location.href='managementdoctors.php?error';
    </script>
<?php

}
}

$result=mysqli_query($con,"SELECT * FROM doctors where Doc_ID='".$_GET['Doc_ID']."'"); // i have write DB table name 

$row=mysqli_fetch_array($result); // i have fetching the all DB input field data's

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<!-- links page include here -->
  <?php include 'links.php'; ?> 

</head>

<style>
/* update payment form css style start here */
.wrapper{
    top:96px;
    left:30%;
    padding-bottom:20px;
    position: relative;
    max-width: 700px;
    max-height:690px;
    width: 100%;
    background:#f0f9fc;
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
        font-size:15px;
        margin-right:2px;
        margin-top:1%;
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
<!-- doctor form start here -->
<div class="wrapper">
    <form action="#" method="post">
    <h2>DOCTORS UPDATING INFORMATION</h2>
      <div class="input-box">
        <label for="">Doctor ID</label>
        <input type="text" placeholder="Enter Doctor ID" required name="Doc_ID" value="<?php echo $row['Doc_ID']; ?>" >
      </div><br>

      <div class="input-box">
      <label for="">Doctor Name</label>
        <input type="text" list="doclist" placeholder="Enter Doctor Name" name="Doc_Name" value="<?php echo $row['Doc_Name']; ?>" >
        <!-- arogya team doctor names  -->
        <datalist id="doclist">
                <option value="Dr. Raj">
                <option value="Dr. Tanya">
                <option value="Dr. Mariyam">
                <option value="Dr. Alexia">
                <option value="Dr. Amaan">
        </datalist>
      </div><br>

      <div class="input-box">
      <label for="">Doctor Address</label>
        <input type="text" placeholder="Enter Address" name="Doc_Add" value="<?php echo $row['Doc_Add']; ?>" >
      </div><br>

      <div class="input-box">
      <label for="">Doctor Phone No</label>
        <input type="text"  placeholder="Enter Doctor Mobile No" name="Doc_phneno"  value="<?php echo $row['Doc_phneno']; ?>" >
      </div><br>

      <div class="input-box">
      <label for="">Doctor Email</label>
        <input type="text"  placeholder="Enter Doctor Email Address" name="Docemail" value="<?php echo $row['Docemail']; ?>" >
      </div><br>

      <div class="input-box" >
        <label>Doctor Specialist</label>
        <input list="list" type="text" placeholder="-Select Doctor Specialist-" name="Docspecialist" value="<?php echo $row['Docspecialist']; ?>" >
            <!-- this cropdow  doctor categories -->
          <datalist id="list">
                <option value="Cardiac">
                <option value="ENT">
                <option value="General Surgeone">
                <option value="physician">
                <option value="Gynaecological">
                <option value="Dental">
                <option value="Urology">
                <option value="Thoracic">
          </datalist>
      </div><br>
            <!-- insert button  -->
      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div>
    </form>
  </div>
</body>
</html>


