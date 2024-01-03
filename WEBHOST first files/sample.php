<?php
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";

$conn =mysqli_connect($servername,$username,$password,$database);
$use=$_POST['x'];

// echo "Sucessfully connected!";

$sql=mysqli_query($conn,"SELECT * FROM samples");                    //this var used below
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