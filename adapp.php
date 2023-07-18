<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$name=$_POST['tn'];
// $email=$_POST['e'];
$date=$_POST['tdate'];
$con=$_POST['tc'];
$time=$_POST['t'];
$id=$_POST['a'];

$sql=mysqli_query($conn,"SELECT * FROM appointments WHERE appoint_id='$id'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


if($count >0 || $count <0){
 mysqli_query($conn,"UPDATE `appointments` SET `test_name`='$name',`appoint_date`='$date',`appoint_time`='$time',`total_cost`='$con' WHERE appoint_id='$id'");
echo 'S';
}
// else{
//     echo 'N';
// }
?>

