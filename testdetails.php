<?php
session_start();
$servername ="localhost";
$username ="root";
$password="";
$database ="labsystemdb1";


$conn =mysqli_connect($servername,$username,$password,$database);

$tname=implode(',',$_POST['tn']);
$cost=implode(',',$_POST['c']);


$_SESSION['test_name'] = $tname;
$_SESSION['test_cost'] = $cost;
// $sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$pname' AND patient_password='$p'");                    //this var used below
// $count=mysqli_num_rows($sql);

// if($count >0){
 echo $tname;
 echo $cost;
//     $data=array();
//     while($mypost= mysqli_fetch_assoc($sql)){
//         array_push($data,$mypost);
//        }  
//        echo json_encode($data);
// }
// else{
//     echo "NE";
// }

?>