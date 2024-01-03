<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);
$use=$_SESSION['user_name'];
$pass=$_SESSION['password'];
$phn=$_POST['con1'];
$email=$_POST['e1'];
$n=$_POST['n'];
$add=$_POST['add1'];
$pw2=$_POST['pw2'];
$name=$_POST['name'];
$em=$_POST['email'];

// echo "Sucessfully connected!";

// $sql =mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$use' AND patient_password='$pass'");
// $count=mysqli_num_rows($sql);
//if ($count >0){
  mysqli_query($conn,"UPDATE `patient` SET `patient_username`='$use',`patient_name`='$n',`patient_email`='$email',`patient_address`='$add',`patient_contact`='$phn',`patient_password`='$pw2' WHERE patient_username='$use' AND patient_password='$pass' ");

mysqli_query($conn,"UPDATE `appointments` SET `patient_name`='$n',`patient_email`='$email' WHERE `patient_name`='$name' AND `patient_email`='$em'");

mysqli_query($conn,"UPDATE `patient_payment` SET `patient_name`='$n',`patient_email`='$email' WHERE `patient_name`='$name' AND `patient_email`='$em'");

echo 'S';
//}
// else{
//     echo 'NS';
// }

?>