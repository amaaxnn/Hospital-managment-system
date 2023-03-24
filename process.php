<?php

$username='root';
$password=''; 
$server='localhost';
$db = "arogya"; // datbase name

$con = mysqli_connect($server,$username,$password,$db); 

if(!$con){
    die(mysqli_error($con));       
  }
  

?>