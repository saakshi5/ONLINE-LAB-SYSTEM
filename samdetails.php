<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$tdate=$_POST['tdate'];
$testn=$_POST['tn'];
$email=$_POST['pemail'];
$patname=$_POST['pname'];
$status=$_POST['status'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM samples");
$count=mysqli_num_rows($sql);


// if($count >0 || $count<0){
 mysqli_query($conn,"INSERT INTO `samples`(`sample_collection_date`, `sample_status`, `patient_name`, `test_name`, `patient_email`) VALUES ('$tdate','$status','$patname','$testn','$email')");
 echo 'Saved Successfully';
//}

?>

