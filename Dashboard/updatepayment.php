<?php
include ('home.php'); //include the home page here

include 'Connection.php'; // creating connection

// update button and assign 
if(isset($_POST['update'])){

    $payment_ID=$_POST['payment_ID'];

$query="UPDATE payments SET payment_type='$_POST[payment_type]',patient_ID='$_POST[patient_ID]', 
payment_totalbill='$_POST[payment_totalbill]',payment_paidbill='$_POST[payment_paidbill]',outstanding_bill='$_POST[outstanding_bill]' 
where payment_ID='$_POST[payment_ID]'";  

// main function to update the data
$query_run=mysqli_query($con,$query);
if($query_run){
?>
    <script>

        alert("Reccord Updated Successfully"); //this poppup message will be display after click update button 
        window.location.href='managementpayment.php';

    </script>
<?php
}
else{
?>
    <script>

    alert("Not Updated");
    window.location.href='managementpayment.php?error'; //which page to poppup want to display

    </script>

<?php
}
}

$result=mysqli_query($con,"SELECT * FROM payments where payment_ID='".$_GET['payment_ID']."'"); //database table name and which data to update the records

$row=mysqli_fetch_array($result); // this is fetching the data

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
    top:87px;
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
        font-size:17px;
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
<div class="wrapper">
    <form action="#" method="post">
    <h2>PAYMENTS UPDATING INFORMATION</h2>
      <div class="input-box">
        <label for="">Payment ID</label>
        <input type="text" placeholder="Enter Payment ID"  name="payment_ID" value="<?php echo $row['payment_ID']; ?>" required>
      </div><br>

      <div class="input-box">
      <label for="">Payment Type</label>
        <input type="text" placeholder="Enter Payment Type" name="payment_type" value="<?php echo $row['payment_type']; ?>">
      </div><br>

      <div class="input-box">
      <label for="">Patient ID</label>
        <input type="text" placeholder="Enter Patient ID" name="patient_ID" value="<?php echo $row['patient_ID']; ?>">
      </div><br>

      <div class="input-box">
      <label for="">Payment Total Bill Amount</label>
        <input type="text"  placeholder="Enter Payment Total Bill" name="payment_totalbill" value="<?php echo $row['payment_totalbill']; ?>" >
      </div><br>

      <div class="input-box">
        <label for="">Payment Paid Bill Amount</label>
        <input type="text" placeholder="Enter Payment Paid Bill" name="payment_paidbill" value="<?php echo $row['payment_paidbill']; ?>" >
      </div><br>

      <div class="input-box">
        <label for="">Outstanding Bill</label>
        <input type="text" placeholder="Enter Outstanding Bill Amount" name="outstanding_bill" value="<?php echo $row['outstanding_bill']; ?>">
      </div><br>

      <div class="staffsched-btn">
           <input type="submit" class="add-btn" name="update" value="UPDATE">
      </div>
      
    </form>
  </div>

</body>
</html>


