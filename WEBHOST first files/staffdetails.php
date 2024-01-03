<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$email=$_POST['se'];
$patname=$_POST['sn'];
 $user=$_POST['su'];
 $pass=$_POST['sp'];
$sal=$_POST['s'];
$role=$_POST['sr'];
// echo "Sucessfully connected!";


$sql=mysqli_query($conn,"SELECT * FROM staff");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


//if($count >0)

mysqli_query($conn,"INSERT INTO `staff`(`staff_username`, `staff_name`, `staff_email`, `staff_role`, `staff_salary`, `staff_password`) VALUES ('$user','$patname','$email','$role','$sal','$pass')");
echo 'Saved Successfully';


?>

