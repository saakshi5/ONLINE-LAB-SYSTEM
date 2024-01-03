<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);
// $tdate=$_POST['tdate'];
// $testn=$_POST['tn'];
$email=$_POST['email'];
//$patname=$_POST['pname'];
//$s=$_POST['status'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `reports`");
$count=mysqli_num_rows($sql);


// if($count >0 || $count<0){
 mysqli_query($conn,"UPDATE `reports` SET `report_status`='sent' WHERE `patient_email`='$email'");
 echo 'Saved Successfully';
//}

?>

