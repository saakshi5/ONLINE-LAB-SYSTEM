<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="labsystemdb1";


$conn =mysqli_connect($servername,$username,$password,$database);
// $use=$_SESSION['user_name'];
// echo $use;
if(isset($_SESSION['Is_login'])){
    $use=$_SESSION['user_name'];
    
    $sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$use'");
    $count=mysqli_num_rows($sql);
    echo ($count);
    
    if($count==1){
        echo("Welcome");
    }
    else{
        header('location:logout.php');
        die("Some issue contact admin");
    }
   
}
else{
    header('location:logout.php');
    die("Some issue contact admin");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="book.css">
        <title>Appointment Page</title>
    </head>
    <body onload="display();">

        <header class="title">
            <div>
                <img src="images/logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading" style="left:8px;">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="homepage.html">HOME</a>
                    <a href="homepage.html">ABOUT US</a>
                <a href="homepage.html">CONTACT </a>
                <!-- </div>
                 <div class="user"> -->
                    <img src="images/user.png" style=" height: 50px; width:50px; margin-right: 1rem; margin-left:1.5rem; align-items:center; padding: 5px;" class="user">
                    <p id="usern" style="color:black;margin-left:37rem; font-size:14px;"></p>
</div>
                <!-- <div id="menu-btn" class="fa fa-bars"> </div> -->
            </nav>
           
        </header>



        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="customer.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            dashboard
                            </span></span>
                        <span class="tittle"> Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="test.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            science
                            </span></span>
                        <span class="tittle"> Available Tests</span>
                    </a>
                    </li>
                    <li>
                        <a href="bookk.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            list_alt
                            </span></span>
                        <span class="tittle"> Book Appointment</span>
                    </a>
                    </li>
                    <li>
                        <a href="payy.php">
                        <span class="icon"><span class="material-symbols-outlined">
                            payments
                            </span></span>
                        <span class="tittle"> Payment</span>
                    </a>
                    </li>
                    <li>
                        <a href="profilee.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            person
                            </span></span>
                        <span class="tittle"> Edit Profile</span>
                    </a>
                    </li>
                    <li>
                        <a href="logout.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            logout
                            </span>
                        </span>
                        <span class="tittle"> Sign Out</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <h2 style="left:500px;">Book Appointment</h2>
      <div class="container-form">
        <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;" enctype="multipart/form-data">

           

            <div class="form-field">
                <p>Patient's Name</p>
                <input type="text" placeholder="Enter name" id="patientname" required>
            </div>

            <div class="form-field">
                <p>Email</p>
                <input type="email" placeholder="Enter email" id="patientemail" required>
            </div>

            <div class="form-field">
                <p>Patient's Age</p>
                <input type="text" placeholder="Enter age" id="age" required>
            </div>

            
            <div class="form-field">
                <p>Test Name</p>
                <!-- <input type="text" placeholder="Enter test name" required> -->
                <textarea id="test" name="test" rows="4" cols="30" required></textarea>
            </div>

            <div class="form-field">
                <p>Total Cost</p>
                <input type="text" placeholder="" id="totalcost" required>
            </div>

            
            <div class="form-field">
                <p>Address</p>
               <textarea id="address" name="address" rows="4" cols="40" required></textarea>
            </div>

            <div class="form-field">
                <p>Appointment Date</p>
                <input type="date" id="date" required>
            </div>
            
            <div class="form-field">
                <p>Appointment Time</p>&nbsp;&nbsp;
            </div><div>
                <input type="time" id="time" required>
                <!-- <input type="radio" id="t1" value="t1" name="time" required>
                <label id="label1">7am-9am</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="t2" value="t2" name="time" required>
                <label id="label2">9am-11am</label> -->
            </div>
            <div>
                <a href="payy.php">
                <button class="btn" onclick="bookingdetails();">Pay</button></a></div>
        </form>
      </div>
    </div>  

    <script>
    var n=document.getElementById('usern');
 n.innerText="<?php echo $_SESSION['user_name'] ?>";
// n.innerText="world";
    </script>
    </body>
</html>



<script>
        let patname=document.getElementById('patientname');
    let patemail=document.getElementById('patientemail');
    let address=document.getElementById('address');
    let testname=document.getElementById('test');
    let testcost=document.getElementById('totalcost');
    
    function display(){
let  pname="<?php echo $_SESSION['user_name'] ?>";
let ppassword="<?php echo $_SESSION['password'] ?>";
let nametest="<?php echo $_SESSION['test_name']?>";
let costtest="<?php echo $_SESSION['test_cost']?>";

console.log(nametest);
console.log(costtest);

testname.innerHTML=nametest;



costtest=costtest+',';
let f=0;
let temp='';
let n=[];
let num=0;
for(let i=0; i<costtest.length;i++){  //i=4,5
    let ch=costtest.charAt(i);  //194,84,
    if(ch==','){
        n[f]=Number(temp);  //n=[194]; 0-194
        //console.log(n[f]);
        num=num+n[f];
        f=f+1;   //0+194=194
        temp='';
    }
  else{
    temp=temp+ch; //temp=19484
   // console.log(temp);
  }
}
//console.log(num);
testcost.value=num;


 $.ajax({
    
    type: 'POST',
    url: 'details.php',
    data: {c:num,pn:pname,p:ppassword},
    success:function(data){


        console.log(data);
    dataa= JSON.parse(data);
    
 patname.value=dataa[0].patient_name;
 patemail.value=dataa[0].patient_email;
 address.value=dataa[0].patient_address;

 console.log(dataa[0].patient_name);
 //console.log(patname.value);
        }
    
    });
    

    }

    
    function bookingdetails(){
    
        // let name=document.getElementById("name");
        // let email=document.getElementById("email");
         let age=document.getElementById("age");
        // let test=document.getElementById("test");
        // let address=document.getElementById("address");
        // let date=document.getElementById("date");
        // let t1=document.getElementById("label1");
        // let t2=document.getElementById("label2");
        // let r1=document.getElementById("t1");
        // let r2=document.getElementById("t2");
        // let time='';
let time=document.getElementById("time");
console.log(time.value);
        console.log('patient booking');
        // console.log(t1.innerText,t2.innerText,r1,r2);
      
//  if(r1.checked)
//  {
//     time=t1.innerText;
//  }
//  else if(r2.checked){
//     time=t2.innerText;
//  }
//  else{
//     time='unknown';
//  }
//         console.log(time);
console.log(testcost.value);
            $.ajax({
    
    type: 'POST',
    url: 'book.php',
    data: {t:time.value,n:patname.value,e:patemail.value,d:date.value,address:address.value,age:age.value,test:testname.innerHTML,cost:testcost.value},
    success:function(data){
        // dataa= JSON.parse(data);
    console.log(data);
        if(data=='S'){
            alert('Data stored Successfully');
         }
         else if(data=='NS'){
            alert('Data already exists');
         }
         else{
            alert('Some issue');
         }
        }
    
    });
    
    
    
    }
    </script>