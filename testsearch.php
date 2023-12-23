<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";


$conn =mysqli_connect($servername,$username,$password,$database);
// $user=$_SESSION['user_name'];
// $password=$_SESSION['password'];


$name=$_POST['tn'];
//$sql=mysqli_query($conn,"SELECT * FROM `test` WHERE LOWER(test_name) ='$name'");         ////this var used below
// $n="%".$name."%";         
$sql=mysqli_query($conn,"SELECT * FROM test WHERE test_name LIKE '%$name%' ");    

// SELECT name FROM planets WHERE name LIKE "%$name%";


$count=mysqli_num_rows($sql);

if($count >0){
    // echo "E";
    $data=array();
    while($mypost= mysqli_fetch_assoc($sql)){
        array_push($data,$mypost);
       }  
       echo json_encode($data);
}
else{
    echo "NE";
}

?>