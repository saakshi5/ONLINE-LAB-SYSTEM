<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$id=$_POST['t'];

// echo $id;
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `test`");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"DELETE FROM `test` WHERE test_id='$id'");
    echo 'S';
}
else{
    echo 'N';
}
?>

