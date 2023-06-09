<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb";


$conn =mysqli_connect($servername,$username,$password,$database);
// $use=$_POST['x'];
$name=$_POST['n'];
$email=$_POST['e'];
$time=$_POST['t'];
$date=$_POST['d'];
$age=$_POST['age'];
$test=$_POST['test'];
$add=$_POST['address'];
// $t2=$_POST['t2'];


// echo "Sucessfully connected!";

$sql=mysqli_query($conn,"SELECT * FROM appointments WHERE appoint_id='$email'");                    //this var used below
$count=mysqli_num_rows($sql);

if ($count >0){
    echo 'EU';
}
else{
        mysqli_query($conn,"INSERT INTO `appointments`(`appoint_id`, `appoint_date`, `appoint_time`, `patient_username`, `patient_name`, `test_name`) VALUES ('$email','$date','$time','bob123','bob','$test')");
        echo 'S'; 

  
}

?>