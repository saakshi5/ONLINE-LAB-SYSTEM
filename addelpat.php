<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$email=$_POST['pe'];
$name=$_POST['pn'];

// echo $id;
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `patient`");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"DELETE FROM `patient` WHERE patient_email='$email' AND patient_name='$name'");
    echo 'S';
}
else{
    echo 'N';
}
?>

