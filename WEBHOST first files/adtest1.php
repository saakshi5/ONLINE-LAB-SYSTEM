<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);

$testn=$_POST['tn'];
$tcost=$_POST['tamt'];
$tid=$_POST['tid'];
$treq=$_POST['treq'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM test WHERE `test_id`='$tid'");
$count=mysqli_num_rows($sql);


//if($count >0 || $count <0){
 mysqli_query($conn,"UPDATE `test` SET `test_name`='$name',`test_cost`='$cost',`prereq`=`$treq` WHERE test_id='$id'");
echo 'Saved Successfully';


?>

