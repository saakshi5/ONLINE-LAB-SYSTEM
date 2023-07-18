<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);

$testn=$_POST['tn'];
$tcost=$_POST['tamt'];
$tid=$_POST['tid'];


// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM test");
$count=mysqli_num_rows($sql);


if($count >0 || $count<0){
 mysqli_query($conn,"INSERT INTO `test`(`test_id`,`test_name`, `test_cost`) VALUES ('$tid','$testn','$tcost')");
 echo 'S';
}

?>

