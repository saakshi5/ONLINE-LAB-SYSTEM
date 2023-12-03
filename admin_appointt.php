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
    
    $sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE admin_username='$use'");
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
        <!-- <script src="system.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="appoint.css">
        <title>Appointments</title>

    </head>
    <body onload="generateappointment();">

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
                 </div>
                <!-- <div id="menu-btn" class="fa fa-bars"> </div> -->
            </nav>
           
        </header>

        
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="admin.php">
                        <span class="icon"><span class="material-symbols-outlined">
                            dashboard
                            </span></span>
                        <span class="tittle"> Dashboard</span>
                    </a>
                    </li>
                    <li>
                            <a href="admin_testt.php">
                            <span class="icon"> <span class="material-symbols-outlined">
                                science
                                </span></span>
                            <span class="tittle"> Available Tests</span>
                        </a>
                        </li>


                        <li>
                            <a href="patientt.php">
                            <span class="icon"><span class="material-symbols-outlined">
                                groups
                                </span></span>
                            <span class="tittle"> Patients</span>
                        </a>
                        </li>
                        

                        <li>
                        <a href="admin_appointt.php">
                        <span class="icon">  <span class="material-symbols-outlined">
                            heart_plus
                            </span></span>
                        <span class="tittle"> Appointments</span>
                    </a>
                    </li>
                    <li>
                        <a href="admin_samplee.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            colorize
                            </span></span>
                        <span class="tittle"> Samples</span>
                    </a>
                    </li>
                   
                    <li>
                        <a href="admin_reportt.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            list_alt
                            </span></span>
                        <span class="tittle"> Reports</span>
                    </a>
                    </li>
                    <li>
                        <a href="admin_paymentt.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            payments
                            </span></span>
                        <span class="tittle">Transaction</span>
                    </a>
                    </li>

                    <li>
                        <a href="staffs.php">
                        <span class="icon"><span class="material-symbols-outlined">
                            badge
                            </span></span>
                        <span class="tittle"> Staff</span>
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
            <h2 style="left:500px;">Appointments</h2>
            <div class="search"><lable>
                <input type="text" placeholder="Search here">
                <div class="butt"><button class="btn-1">Go</button></div>

                <div class="iconn">
                    <span class="material-symbols-outlined">
                        search
                        </span> </div>
            </lable>
            </div>
            <a href="#" class="btn"  onclick="addappointdetails();"><span class="material-symbols-outlined">
                add
                </span> Add Appointment</a>

<div id="adappointbox">
            <div class="table-box">
                <div class="table-row table-head">
                    <!-- <div class="table-cell">
                        <p>Patient Id</p>
                    </div> -->
                    <div class="table-cell first-cell">
                        <p>Appointment Id</p>
                    </div>
               
                    <div class="table-cell">
                        <p>Patient Name</p>
                    </div>
               
                    <div class="table-cell">
                        <p>Test Name</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Date</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Time</p>
                    </div>

                    <div class="table-cell">
                        <p>Payment</p>
                    </div>
                    
                    <div class="table-cell last-cell">
                        <p>Action</p>
                    </div>

                </div>
<div id="adappointbox">
<!-- 
                <div class="table-row">
                    <div class="table-cell first-cell">
                        <p id="adappid">12667</p>
                    </div>
                    <div class="table-cell">
                        <p id="adappn">Parag</p>
                    </div>
               
                    <div class="table-cell">
                        <p id="adapptestn">CBC</p>
                    </div>
                    
                    <div class="table-cell">
                        <p  id="adappd">1/05/2023</p>
                    </div>
                    <div class="table-cell">
                        <p>7am-9am</p>
                    </div>

                    <div class="table-cell">
                        <p id="adappay">1000</p>
                    </div>
                    
                    <div class="table-cell last-cell">
                        <p id="adappb"><button class="btn-2" onclick="openn();">
                            <span class="material-symbols-outlined">
                                edit
                                </span>
                         </button>
                         <button class="btn-3" onclick="deleteb();">
                            <span class="material-symbols-outlined">
                                delete
                                </span>
                         </button></p>
                    </div>

                </div> -->

            </div>
                <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                        <p>Blood Sugar</p>
                    </div>
               
                    <div class="table-cell last-cell">
                 
                </div> -->
            </div>
            </div>
            
            
    <!-- //modal -->
    
   <div class="modal" id="modall">
    <div class="modal-header">
     <div class="tittle">Edit Details</div>
     <button class="close" id="closse" onclick="closee();" ><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="modal-body">
        <form>
            <div class="form-field">
                <p>Test:</p>
                <input type="text" placeholder="" id="t"/>
            </div>
            <div class="form-field">
                <p>Payment:</p>
                <input type="text" placeholder="" id="p"/>
            </div>
          
            <div class="form-field">
                <p>Time:</p>
                <input type="time" placeholder="" id="time"/>
            </div>
          
            <div class="form-field">
                <p>Date:</p>
                <input type="date" placeholder="" id="tdate"/>
            </div>
          
            <div>
                <a href="#">
                <button class="edit" onclick="editbutton();">Save Changes</button></a></div>
        </form>
    </div>
 </div>
<div id="overlay"></div>


<div class="delmodal" id="delmodall">
    <div class="delmodal-header">
     <div class="tittle"></div>
     <button class="close" id="closse" onclick="closee();"><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="delmodal-body">
        <form>
            <div class="form-field">
                <p>Do you want to delete?</p>
                <!-- <input type="text" placeholder="" required> -->
            </div>
          
            <div>
                <a href="#">
                <button class="edit" onclick="deletebutton();">Delete</button></a></div>
        </form>
    </div>
 </div>
<div id="overlay"></div>

<div class="addmodal" id="addmodall">
    <div class="addmodal-header">
     <div class="tittle">Enter Details:</div>
     <button class="close" id="closse" onclick="closee();"><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="addmodal-body">
        <form>
                <div class="form-field">             
                <p>Enter Patient name:</p>
                <input type="text" name="pname" id="pname" required/></div>
                <div class="form-field">        
                <p>Enter Email:</p>
                <input type="text" name="pemail" id="pemail" required/></div>
                <div class="form-field">        
                 <p>Enter Age:</p>
                <input type="text" name="amt" id="age" required/></div>
                 <div class="form-field">             
                <p>Enter Test name:</p>
                <input type="text" name="pname" id="tname" required/></div>
                <div class="form-field">        
                <p>Enter Time:</p>
                <input type="time" name="time" id="t1" required/></div>
                <div class="form-field">        
                 <p>Enter Payment:</p>
                <input type="text" name="amt" id="pay" required/></div>
                <div class="form-field">        
                <p>Enter Date:</p>
                <input type="date" name="date" id="date" required/></div>

            
            <div>
                <a href="#">
                <button class="edit" onclick="createappoints();">Submit</button></a></div>
            </form>
            </div>
     </div>      
          
<div id="overlay"></div>

    </div>  

    </body>
</html>







<script>
  
let tn=document.getElementById('t');
    
let date=document.getElementById('tdate');
let time=document.getElementById('time');
let tc=document.getElementById('p');
let acnum=document.createElement('p');
acnum.setAttribute('id', 'acnum');

let appi=document.createElement('p');
appi.setAttribute('id', 'appi');
  function openn(e){
    console.log(e.target.parentNode.parentNode.parentNode.parentNode.childNodes);
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[2].innerText;//test name
    console.log(eb);
    d=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[3].innerText;//test date
    console.log(d);
    t=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[4].innerText;//test time
    console.log(t);

    pay=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[5].innerText;//test amt
    console.log(pay);

    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//test amt
    console.log(em);


const modal =document.getElementById('modall');
const overlay =document.getElementById('overlay');
modal.style.display = 'block';
overlay.style.display = 'block';
modal.style.transform= 'translate(-50%,-50%) scale(1)';
tn.value=eb;
date.value=d;
time.value=t;
tc.value=pay;
acnum=em;
// console.log('id=',em);
}



function closee(){
    const modal =document.getElementById('modall');
    const delmodal =document.getElementById('delmodall');
    const addmodal =document.getElementById('addmodall');
const overlay =document.getElementById('overlay');
modal.style.display = 'none';
delmodal.style.display = 'none';
addmodal.style.display='none';
overlay.style.display = 'none';
}

function deleteb(e){
    
    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//app id
    console.log(em);
    console.log('delete data');
    const delmodal =document.getElementById('delmodall');
const overlay =document.getElementById('overlay');
delmodal.style.display = 'block';
overlay.style.display = 'block';
delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
appi=em;
}


function addappointdetails(){
    console.log('add data');
    const addmodal =document.getElementById('addmodall');
const overlay =document.getElementById('overlay');
addmodal.style.display = 'block';
overlay.style.display = 'block';
addmodal.style.transform= 'translate(-50%,-50%) scale(1)';
}

// function deletebutton(){
//     // let delb=document.getElementById('deletebutton');
//     window.alert('Deleted Successfully');

// }
    
    
    
        function generateappointment(){
            $.ajax({
    
    type: 'POST',
    url: 'admin_appoint.php',
    data: {x:'Appoints'},
    success:function(data){
        // console.log(data);
    
    //  if(data =='E')
    //  {
    
    //  }
    
     if(data =='NE'){
     alert('Not exists');
     }
     else {
    //  alert('Exists');
    dataa= JSON.parse(data);
        console.log(dataa[0].appoint_time);
    
    
    for(let i=0; i<dataa.length;i++) {
    
     let tr=document.createElement('div');
    tr.classList.add('table-row');  
    
    let tcell1=document.createElement('div');
     tcell1.classList.add('table-cell','first-cell');
    
     let tcell2=document.createElement('div');
     tcell2.classList.add('table-cell');
    
     let tcell3=document.createElement('div');
     tcell3.classList.add('table-cell');
    
     let tcell4=document.createElement('div');
    //  tcell4.type="time";
     tcell4.classList.add('table-cell');
    
     let tcell5=document.createElement('div');
     tcell5.classList.add('table-cell');
     let tcell6=document.createElement('div');
     tcell6.classList.add('table-cell');
    

     let tcell7=document.createElement('div');
     tcell7.classList.add('table-cell','last-cell');
    
    
    
    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'pbutton');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');
    
    
    
    //rows and cols
     let tbox1=document.getElementById('adappointbox');
    
    tbox1.appendChild(tr);
    tr.appendChild(tcell1);
    tcell1.innerText=dataa[i].appoint_id;
    

    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].patient_name;
    
    tr.appendChild(tcell3);
    tcell3.innerText=dataa[i].test_name;
    
    
    tr.appendChild(tcell4);
    tcell4.innerText=dataa[i].appoint_date;
    
    
    tr.appendChild(tcell5);
    tcell5.innerText=dataa[i].appoint_time;

        
    tr.appendChild(tcell6);
    tcell6.innerText=dataa[i].total_cost;
    
    tr.appendChild(tcell7);
    tcell7.appendChild(p);
    p.appendChild(btn1);
    btn1.appendChild(span);
    p.appendChild(btn2);
    btn2.appendChild(span2);
    
    btn1.addEventListener('click',e=>openn(e));
    btn2.addEventListener('click',e=>deleteb(e));
    
     }
    
    }
    }
     });
        }

    

        function editbutton(){
 
 $.ajax({
     
     type: 'POST',
     url: 'adapp.php',
     data: {tn:tn.value,tdate:date.value,t:time.value,tc:tc.value,a:acnum},
     success:function(data){
 
         alert(data);
        // console.log(data);
    //data= JSON.parse(data);
 if(data=='S'){
    alert('Saved successfully');
 }
 else if(data=='N'){
    alert('Not Saved successfully');
 }
 
 else{
     alert('Some issue');
 }
         }
     
     })
 
    
  }

  function createappoints(){
    let tname=document.getElementById("tname");
let atime=document.getElementById("t1");
  let pay=  document.getElementById("pay");
let tdate=document.getElementById("date");
let pname=document.getElementById("pname");
let pemail=document.getElementById("pemail");
let age=document.getElementById("age");
$.ajax({
    
    type: 'POST',
    url: 'appdetails.php',
    data: {tn:tname.value,tc:pay.value,t:atime.value,tdate:tdate.value,a:age.value,pn:pname.value,pe:pemail.value},
    success:function(data){


        console.log(data);
   //data= JSON.parse(data);
   alert(data);
    }
    
    })

  }
  
  function deletebutton(){
   // console.log("hi");

// let ttid=document.getElementById("atid");

 console.log(appi);
 $.ajax({
     
     type: 'POST',
     url: 'addelapp.php',
     data: {i:appi},
     success:function(data){
 
         alert(data);
        // console.log(data);
    //data= JSON.parse(data);
    if(data=='S'){
        alert('Deleted Successfully');
     }
     else if(data=='N'){
        alert('Not deleted successfully');
     }
     else{
        alert('Some issue');
     }
         }
     
     });
 
    
  }
    </script>