<?php
include ('home.php');
include 'Connection.php'; //create connecton file

// assign wich data to get the data
if(isset($_POST['room_ID'])){

    $room_ID=$_POST['room_ID']; //GET Datas

$query="UPDATE room SET r_period='$_POST[r_period]',room_type='$_POST[room_type]',pat_ID='$_POST[pat_ID]' where room_ID='$_POST[room_ID]'"; //write variable  name

$query_run=mysqli_query($con,$query); //update php main functionalies 
if($query_run){

    ?>
    <script>

        alert("Record has been Updated"); // if condition true popup message display
        window.location.href='managementroom.php';

    </script>

    <?php
}
else{

    ?>

    <script>

        alert("Record not Updated"); 
        window.location.href='managementroom.php'; //which page to display message

    </script>

    <?php
}
}

$result=mysqli_query($con,"SELECT * FROM room where room_ID='".$_GET['room_ID']."'");  //selecting a DB table name

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
        margin-bottom: 5%;
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
        margin-bottom: 3%;
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
<!-- room update form start here -->
<div class="wrapper">
    
    <form action="#" method="post">
    <h2>ROOMS UPDATING INFORMATION</h2>
      <div class="input-box" style="margin-top:5%;" >
        <label for="">Room ID</label>
        <input type="text"name="room_ID" placeholder="Enter Room ID" value="<?php echo $row["room_ID"];?>" required>
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Period</label>
        <input type="text" name="r_period" placeholder="Enter Room Period" value="<?php echo $row["r_period"];?>">
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Room Type</label>
        <input type="text" name="room_type" placeholder="Enter Room Type" value="<?php echo $row["room_type"];?>">
      </div>

      <div class="input-box" style="margin-top:9%;">
      <label for="">Patient ID</label>
        <input type="text" name="pat_ID" placeholder="Enter Patient ID" value="<?php echo $row["pat_ID"];?>">
      </div><br>

      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div> <br>
    </form>
</div>
<!-- room form end here -->
</body>
</html>


