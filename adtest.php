<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$cost=$_POST['ta'];
$name=$_POST['tname'];
$id=$_POST['tid'];
$treq=$_POST['treq'];

$sql=mysqli_query($conn,"SELECT * FROM test WHERE test_id='$id'");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


//if($count >0 || $count <0){
 mysqli_query($conn,"UPDATE `test` SET `test_name`='$name',`test_cost`='$cost',`prereq`=`$treq` WHERE test_id='$id'");
echo 'Saved Successfully';
// }
// else{
//     echo 'N';
// }
?>

