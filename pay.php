<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb";


$conn =mysqli_connect($servername,$username,$password,$database);
$aname=$_POST['acn'];
$bankn=$_POST['bn'];
$branchn=$_POST['br'];
$tamt=$_POST['amt'];
$tdate=$_POST['date'];
$anum=$_POST['accnum'];
$image=$_POST['img'];

// echo "Sucessfully connected!";

$sql =mysqli_query($conn,"SELECT * FROM patient_payment WHERE ac_no='$anum'");
$count=mysqli_num_rows($sql);
if ($count >0){
    echo 'EU';
}
else{
    mysqli_query($conn,"INSERT INTO `patient_payment`(`ac_no`, `ac_holdername`, `ac_bankname`, `ac_branchname`, `actrans_date`, `actrans_amt`, `actrans_status`, `actrans_receipt`, `patient_username`, `patient_name`, `patient_email`) VALUES ('$anum','$aname','$bankn','$branchn','$tdate','$tamt','Due','$image','om','om pawar','omp@gmail.com')");
    echo 'S';
}
?>