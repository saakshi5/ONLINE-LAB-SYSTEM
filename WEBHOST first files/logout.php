<?php
session_start();$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);

// $use=$_SESSION['USERNAME'];
//mysqli_query($con,"UPDATE `session_tb` SET `sess_userstatus`='inactive' WHERE sess_username='$use'");
unset($_SESSION['Is_login']);
// unset($_SESSION['password']);
unset($_SESSION['user_name']);
header('location:homepage.html');
die();
?>