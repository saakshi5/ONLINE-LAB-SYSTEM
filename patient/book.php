<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";


$conn =mysqli_connect($servername,$username,$password,$database);
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];


// $pname=$_POST['pn'];
// $p=$_POST['p'];

// $sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$pname' AND patient_password='$p'");                    //this var used below
// $count=mysqli_num_rows($sql);

// if($count >0){
//     // echo "E";
//     $data=array();
//     while($mypost= mysqli_fetch_assoc($sql)){
//         array_push($data,$mypost);
//        }  
//        echo json_encode($data);
// }
// else{
//     echo "NE";
// }

$name=$_POST['n'];
$email=$_POST['e'];
$time=$_POST['t'];
$date=$_POST['d'];
$age=$_POST['age'];
$test=$_POST['test'];
$add=$_POST['address'];
$cost=$_POST['cost'];
// $t2=$_POST['t2'];

// echo "Sucessfully connected!";
// $_SESSION['user_name'] = $use;
// $_SESSION['password'] = $pass;
$sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$user' AND patient_password='$password'");                    //this var used below
$count=mysqli_num_rows($sql);

if ($count >0){
    mysqli_query($conn,"INSERT INTO `appointments`(`patient_email`, `appoint_date`, `appoint_time`, `patient_name`, `test_name`, `age`, `total_cost`) VALUES ('$email','$date','$time','$name','$test','$age','$cost')");
    echo 'S'; 

}
else{
      echo 'NS';

}



?>