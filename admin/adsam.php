<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$status=$_POST['d'];
$acnum=$_POST['a'];
// echo "Sucessfully connected!";

// $status = $statusMsg ='';
// $patname='';
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM samples WHERE patient_email='$acnum'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"UPDATE `samples` SET `sample_status`='$status' WHERE patient_email='$acnum'");
  echo 'S';
}
else{
    echo 'N';
}
?>

