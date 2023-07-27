<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);
$aname=$_POST['acn'];
$bankn=$_POST['bn'];
$branchn=$_POST['br'];
$tamt=$_POST['amt'];
$tdate=$_POST['date'];
$anum=$_POST['accnum'];
$email=$_POST['p'];
$patname=$_POST['pn'];
$s=$_POST['status'];
// $btn=$_POST['submit'];
// // $name=$_POST['name'];
// $f=$_POST['f'];
// echo "Sucessfully connected!";

// $status = $statusMsg ='';
// $patname='';
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$sql=mysqli_query($conn,"SELECT * FROM patient_payment");
// //  $patn =mysqli_query($conn,"SELECT `patient_name` FROM patient WHERE patient_username='$user' AND patient_password='$password'");
$count=mysqli_num_rows($sql);


if($count >0 || $count <0){
 mysqli_query($conn,"INSERT INTO `patient_payment`(`ac_no`, `ac_holdername`, `ac_bankname`, `ac_branchname`, `actrans_date`, `actrans_amt`,`patient_name`, `patient_email`,`actrans_status`) VALUES ('$anum','$aname','$bankn','$branchn','$tdate','$tamt','$patname','$email','$s')");
echo 'S';
}
// $image='hello';
// $sql =mysqli_query($conn,"SELECT * FROM patient_payment WHERE ac_no='$anum' AND ac_holdername='$aname'");
// $count=mysqli_num_rows($sql);

// if ($count >0){
//     echo 'EU';
// }
else{
 //mysqli_query($conn,"INSERT INTO `patient_payment`(`ac_no`, `ac_holdername`, `ac_bankname`, `ac_branchname`, `actrans_date`, `actrans_amt`, `actrans_status`, `patient_username`, `receipt`) VALUES ('$anum','$aname','$bankn','$branchn','$tdate','$tamt',Null,'$user','$f')");
echo 'NS';

}
?>

