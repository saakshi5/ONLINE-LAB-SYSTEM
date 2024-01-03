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

$sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_email='$email'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


if($count >0 || $count <0){
 mysqli_query($conn,"UPDATE `patient` SET `patient_name`='$name',`patient_email`='$email',`patient_address`='$add',`patient_contact`='$con' WHERE `patient_email`='$email'");
echo 'S';
}
else{
    echo 'N';
}
?>

