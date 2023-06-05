<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb";


$conn =mysqli_connect($servername,$username,$password,$database);
$use=$_POST['use'];
$pass=$_POST['pass'];
// echo "Sucessfully connected!";

$sql =mysqli_query($conn,"SELECT * FROM admin WHERE admin_username='$use'");
$p=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$use'");
$s=mysqli_query($conn,"SELECT * FROM staff WHERE staff_username='$use'");
$countp=mysqli_num_rows($p);
$counts=mysqli_num_rows($s);

$sqlp =mysqli_query($conn,"SELECT * FROM admin WHERE admin_password='$pass' AND admin_username='$use'");
$count=mysqli_num_rows($sql);
$count1=mysqli_num_rows($sqlp);


$pat=mysqli_query($conn,"SELECT * FROM patient WHERE patient_password='$pass' AND patient_username='$use'");
$staff=mysqli_query($conn,"SELECT * FROM staff WHERE staff_password='$pass' AND staff_username='$use'");
$patr=mysqli_num_rows($pat);
$staffr=mysqli_num_rows($staff);



if($count >0 || $countp >0 || $counts >0){
    // echo 'Correct'; //existing username
  if($count1 >0 || $patr >0 || $staffr >0){
    //  echo 'CP'; //existing password
        if($patr >0){
      echo 'P';
        }
       elseif($staffr >0)
       {
      echo 'Staff';
        }
     else{
      echo 'A';
      }

   }   
  
 else{
    echo 'ICP';
   } 
  } 
else{
    echo 'Incorrect';  //not exists username
}


// if($patr >0){
//   echo 'P';
// }
//   elseif($staffr >0)
// {
//   echo 'Staff';
// }
// elseif($count1 >0){
//   echo 'A';
// }
// else {
//   echo 'No';
// }
?>