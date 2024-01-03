<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
// $tdate=$_POST['tdate'];
// $testn=$_POST['tn'];
$email=$_POST['pemail'];
$patname=$_POST['pname'];
$rep=$_POST['prep'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM reports");
$count=mysqli_num_rows($sql);


// if($count >0 || $count<0){
 mysqli_query($conn,"UPDATE `reports` SET `report_img`='rep',`patient_email`='$email',`patient_name`='$patname' WHERE `patient_email`='$email'");
 echo 'Saved Successfully';
//}

?>

