<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$staffemail=$_POST['pe'];
$staffname=$_POST['pn'];

// echo $id;
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM `staff`");
$count=mysqli_num_rows($sql);


if($count >0){
 mysqli_query($conn,"DELETE FROM `staff` WHERE staff_email='$staffemail' AND staff_name='$staffname'");
    echo 'S';
}
else{
    echo 'N';
}
?>

