<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
// $tdate=$_POST['tdate'];
// $testn=$_POST['tn'];
$email=$_POST['email'];
//$patname=$_POST['pname'];
//$s=$_POST['status'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `patient_payment`");
$count=mysqli_num_rows($sql);


// if($count >0 || $count<0){
 mysqli_query($conn,"UPDATE `patient_payment` SET `actrans_status`='paid' WHERE `patient_email`='$email'");
 echo 'Saved Successfully';
//}

?>

