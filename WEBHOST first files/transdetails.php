<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$aname=$_POST['acname'];
$bankn=$_POST['bname'];
$branchn=$_POST['brname'];
$tamt=$_POST['amt'];
$tdate=$_POST['tdate'];
$anum=$_POST['acno'];
$email=$_POST['pemail'];
$patname=$_POST['pname'];
$status=$_POST['status'];

// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM patient_payment");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
count=mysqli_num_rows($sql);


if($count >0 || $count<0){
 mysqli_query($conn,"INSERT INTO `patient_payment`(`ac_no`, `ac_holdername`, `ac_bankname`, `ac_branchname`, `actrans_date`, `actrans_amt`,`actrans_status`,`patient_name`, `patient_email`) VALUES ('$anum','$aname','$bankn','$branchn','$tdate','$tamt','$status','$patname','$email')");
 echo 'S';
}

?>

