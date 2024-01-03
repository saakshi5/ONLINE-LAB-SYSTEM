<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);
$user=$_SESSION['user_name'];
$p=$_SESSION['password'];

$sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$user' AND patient_password='$p'");                    //this var used below
$count=mysqli_num_rows($sql);

if($count >0){
    // echo "E";
    $data=array();
    while($mypost= mysqli_fetch_assoc($sql)){
        array_push($data,$mypost);
       }  
       echo json_encode($data);
}
// else{
//     echo "NE";
// }

?>