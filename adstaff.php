<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$name=$_POST['n'];
$email=$_POST['e'];
$role=$_POST['r'];
$sal=$_POST['sal'];

$sql=mysqli_query($conn,"SELECT * FROM staff WHERE staff_email='$email'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


// if($count >0 || $count <0){
 mysqli_query($conn,"UPDATE `staff` SET `staff_name`='$name',`staff_email`='$email',`staff_role`='$role',`staff_salary`='$sal' WHERE `staff_email`='$email'");
echo 'Saved Succesfully';
// }
// else{
//     echo 'N';
// }
?>

