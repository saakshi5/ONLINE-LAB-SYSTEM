<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";


$conn =mysqli_connect($servername,$username,$password,$database);
$use=$_POST['use'];
$pass=$_POST['pass'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$name=$_POST['name'];
$add=$_POST['add'];


$_SESSION['usename'] = $use;
$_SESSION['pw'] = $pass;

// echo "Sucessfully connected!";

$sql =mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$use'");
$count=mysqli_num_rows($sql);
if ($count >0){
    echo 'EU';
}
else{
    mysqli_query($conn,"INSERT INTO `patient`(`patient_username`, `patient_name`, `patient_email`, `patient_address`, `patient_contact`, `patient_password`) VALUES ('$use','$name','$email','$add','$phn','$pass')");
    echo 'S';
}
?>