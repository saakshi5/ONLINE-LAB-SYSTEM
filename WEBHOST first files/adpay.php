<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$status=$_POST['d'];
$acnum=$_POST['a'];
// echo "Sucessfully connected!";

// $status = $statusMsg ='';
// $patname='';
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM patient_payment WHERE patient_email='$acnum'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"UPDATE `patient_payment` SET `actrans_status`='$status' WHERE patient_email='$acnum'");
echo 'S';
}
else{
    echo 'N';
}
?>

