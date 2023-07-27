<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$email=$_POST['pe'];
$patname=$_POST['pn'];
 $age=$_POST['a'];
 $time=$_POST['t'];
$cost=$_POST['tc'];
$tn=$_POST['tn'];
// echo "Sucessfully connected!";

$date =$_POST['tdate'];
// $patname='';
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM appointments");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


//if($count >0)

mysqli_query($conn,"INSERT INTO `appointments`(`patient_email`, `appoint_date`, `appoint_time`, `patient_name`, `test_name`, `age`, `total_cost`) VALUES ('$email','$date','$time','$patname','$tn','$age','$cost')");
echo 'Saved Successfully';


?>

