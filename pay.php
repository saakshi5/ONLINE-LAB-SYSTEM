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
$img=$_POST['image'];
$btn=$_POST['submit'];
$name=$_POST['name'];
// echo "Sucessfully connected!";

$status = $statusMsg ='';
$patname='Joe';
$user='joe11';
$tn="ECG";
// $image='hello';
$sql =mysqli_query($conn,"SELECT * FROM patient_payment WHERE ac_no='$anum'");
$count=mysqli_num_rows($sql);

if ($count >0){
    echo 'EU';
}
else{
    if(isset ($_POST['submit']))
    {
        // $status ='error';
        if(!empty($_FILES["name"]["name"])){
            $filename =basename($_FILES["name"]["name"]);
            $fileType= pathinfo($filename, PATHINFO_EXTENSION);

            $allowTypes=array('jpg', 'png', 'jpeg');
            if(in_array($fileType,$allowTypes)){
                $image=$_FILES['name']['tmp_name'];
                $imgContent=addslashes(file_get_contents($image));



               $ssql= mysqli_query($conn,"INSERT INTO `patient_payment`(`ac_no`, `ac_holdername`, `ac_bankname`, `ac_branchname`, `actrans_date`, `actrans_amt`, `actrans_status`, `patient_username`, `patient_name`, `patient_email`, `receipt`) VALUES ('$anum','$aname','$bankn','$branchn','$tdate','$tamt',Null,'$user','$patname','$tn','$imgContent')");
                $insert=$db->query($ssql);

                if($insert){
                    echo 'S';

                }
                else{
                    echo 'N';
                }
        }
    }
    echo 'N';

}
else{
    echo 'N';
}
// echo 'S';

}
?>