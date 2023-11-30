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
$sql=mysqli_query($conn,"SELECT * FROM `samples` ");
$count=mysqli_num_rows($sql);


// if($count >0 || $count<0){
 mysqli_query($conn,"UPDATE `samples` SET `sample_status`='collected' WHERE `patient_email`='$email'");
 echo 'Saved Successfully';
//}

?>

