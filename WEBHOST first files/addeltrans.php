<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);
$patemail=$_POST['pe'];
$patname=$_POST['pn'];

// echo $id;
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `patient_payment`");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"DELETE FROM `patient_payment` WHERE patient_email='$patemail' AND patient_name='$patname'");
    echo 'S';
}
else{
    echo 'N';
}
?>

