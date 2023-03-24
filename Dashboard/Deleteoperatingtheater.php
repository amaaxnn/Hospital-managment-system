
<?php
include ("Connection.php");
error_reporting(0);

// if the 'id' variable is set in the URL, we know that we need to edit a record
$row=$_GET['Getdel'];
	// write delete query
$query = "DELETE FROM `operating_room` WHERE Operation_No = '$row'";


	// Execute the query
$data=mysqli_query($con,$query);

if($data) 
{
	echo "<font color='green'; text-align:'center';>Record has been Delete Successfully";
	header('Location: managementoperatingtheater.php');
}
else
{
	echo "<font color='red'>Record Not Deleted";
}

?>