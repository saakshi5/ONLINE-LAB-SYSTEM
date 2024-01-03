<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);

$name=$_POST['n'];
$email=$_POST['e'];
$add=$_POST['a'];
$con=$_POST['c'];
$user=$_POST['u'];
$pass=$_POST['p'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM patient");
$count=mysqli_num_rows($sql);


if($count >0 || $count<0){
 mysqli_query($conn,"INSERT INTO `patient`(`patient_username`, `patient_name`, `patient_email`, `patient_address`, `patient_contact`, `patient_password`) VALUES ('$user','$name','$email','$add','$con','$pass')");
 echo 'S';
}
else{
    echo 'N';
}
?>

