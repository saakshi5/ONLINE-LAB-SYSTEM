<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$id=$_POST['i'];


// echo $id;
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `appointments`");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"DELETE FROM `appointments` WHERE appoint_id='$id'");
    echo 'S';
}
else{
    echo 'N';
}
?>

