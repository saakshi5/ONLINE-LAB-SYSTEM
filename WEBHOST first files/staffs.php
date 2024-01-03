<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";


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
        <link rel="stylesheet" href="staff.css">
        <title>Staff Detalis</title>
    </head>
    <body onload="generatestaffpay();">

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
                        <span class="tittle"> Transaction</span>
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
           <h2 style="left:500px;">Staff Details</h2>
           <div class="search"><lable>
            <input type="text" placeholder="Search here">
            <div class="butt"><button class="btn-1">Go</button></div>
            <div class="iconn">
                <span class="material-symbols-outlined">
                    search
                    </span> </div>
        </lable>
        </div>
            <a href="#" class="btn" onclick="addappointdetails();"><span class="material-symbols-outlined">
                add
                </span></span> Add Staff</a>
  <div id="onlystaffbox" >             
            <div class="table-box">
                <div class="table-row table-head">
                    <div class="table-cell first-cell">
                        <p>Name</p>
                    </div>
                    <div class="table-cell">
                        <p>Email</p>
                    </div>
                
                    

                    <div class="table-cell">
                        <p>Role</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Salary</p>
                    </div>
                    <div class="table-cell">
                        <p>Action</p>
                    </div>
                    

                </div>
<div id="onlystafftbox">
                <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                        <p id="staffid">01</p>
                    </div>
                    <div class="table-cell">
                        <p id="staffn">Nitin</p>
                    </div>
                    
                    <div class="table-cell">
                        <p id="staffe">nitinsalvi@gmail.com</p>
                    </div>
                    

                    <div class="table-cell">
                        <p id="staffrole">Laboratorist</p>
                    </div>
                    
                    <div class="table-cell last-cell">
                        <p id="staffb"><button class="btn-2" onclick="openn();">
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
            

            </div>
        </div>
                        
    <!-- //modal -->
    
   <div class="modal" id="modall">
    <div class="modal-header">
     <div class="tittle">Edit Staff Details</div>
     <button class="close" id="closse" onclick="closee();" ><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="modal-body">
        <form>
            <div class="form-field">
                <p>Staff Name:</p>
                <input type="text" placeholder="" id="st"/>
            </div>
            <div class="form-field">
                <p>Staff Email:</p>
                <input type="text" placeholder="" id="e"/>
            </div>
            <div class="form-field">
                <p>Role:</p>
                <input type="text" placeholder="" id="role1"/>
            </div>
          
            <div class="form-field">
                <p>Salary:</p>
                <input type="text" placeholder="" id="salary"/>
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
     <div class="tittle">Add Sample</div>
     <button class="close" id="closse" onclick="closee();"><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="addmodal-body">
        <form>
            <div class="form-field">             
                <p>Enter Username:</p>
                <input type="text" name="susern" id="sus" required/></div>
                <div class="form-field">        
                <p>Enter Password:</p>
                <input type="password" name="spass" id="spass" required/></div>        
                <div class="form-field">             
                <p>Enter Staff name:</p>
                <input type="text" name="sname" id="sname" required/></div>
                <div class="form-field">        
                <p>Enter Staff Email:</p>
                <input type="text" name="semail" id="semail" required/></div>
                <div class="form-field">        
                 <p>Enter Role:</p>
                <input type="text" name="role" id="role" required/></div>
                <div class="form-field">        
                <p>Enter Salary:</p>
                <input type="text" name="salary" id="sal" required/>
            </div>

            
            <div>
                <a href="#">
                <button class="edit" onclick="createappointments();">Submit</button></a></div>
            </form>
            </div>
     </div>      
          
<div id="overlay"></div>
    </div>  

    </body>
</html>




<script>
    
let staff=document.getElementById('st');
let staffe=document.getElementById('e');

let staffr=document.getElementById('role1');

let staffsal=document.getElementById('salary');
let acnum=document.createElement('p');
acnum.setAttribute('id', 'acnum');

let stafn=document.createElement('p');
stafn.setAttribute('id', 'stafn');

let stafe=document.createElement('p');
stafe.setAttribute('id', 'stafe');

  function openn(e){
    console.log(e.target.parentNode.parentNode.parentNode.parentNode.childNodes);
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//name
    console.log(eb);
    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;//email
    console.log(em);
    r=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[2].innerText;
    console.log(r);
    s=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[3].innerText;
    console.log(s);

const modal =document.getElementById('modall');
const overlay =document.getElementById('overlay');
modal.style.display = 'block';
overlay.style.display = 'block';
modal.style.transform= 'translate(-50%,-50%) scale(1)';
staff.value=eb;
staffe.value=em;
staffr.value=r;
staffsal.value=s;

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
    console.log('delete data');
    snn=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//name
    console.log(snn);
    see=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;//email
    console.log(see);
    const delmodal =document.getElementById('delmodall');
const overlay =document.getElementById('overlay');
delmodal.style.display = 'block';
overlay.style.display = 'block';
delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
stafn=snn;
stafe=see;
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

    
    
        function generatestaffpay(){
            $.ajax({
    
    type: 'POST',
    url: 'staff.php',
    data: {x:'Staff Payment'},
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
        console.log(dataa[0].staff_name);
    
    
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
     tcell4.classList.add('table-cell');
    
     let tcell5=document.createElement('div');
     tcell5.classList.add('table-cell','last-cell');

    
    
    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'staffb');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');
    
    
    
    //rows and cols
     let tbox1=document.getElementById('onlystafftbox');
    
    tbox1.appendChild(tr);
    tr.appendChild(tcell1);
    tcell1.innerText=dataa[i].staff_name;
    
    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].staff_email;
    
    
    tr.appendChild(tcell3);
    tcell3.innerText=dataa[i].staff_role;
    
    
    tr.appendChild(tcell4);
    tcell4.innerText=dataa[i].staff_salary;

    
    tr.appendChild(tcell5);
    tcell5.appendChild(p);
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
     url: 'adstaff.php',
     data: {n:staff.value,e:staffe.value,r:staffr.value,sal:staffsal.value},
     success:function(data){
 
         alert(data);
        // console.log(data);
    //data= JSON.parse(data);
    alert(data);
//  if(data=='S'){
//     alert('Saved successfully');
//  }
//  else if(data=='N'){
//     alert('Not Saved successfully');
//  }
 
//  else{
//      alert('Some issue');
//  }
         }
     
     })
 
    
  }
  function createappointments(){
     
let sname=document.getElementById('sname');
let semail=document.getElementById('semail');
     
let sus=document.getElementById('sus');
let spass=document.getElementById('spass');
let sr=document.getElementById('role');

let ssal=document.getElementById('sal');
$.ajax({
    
    type: 'POST',
    url: 'staffdetails.php',
    data: {sn:sname.value,sr:sr.value,s:ssal.value,se:semail.value,su:sus.value,sp:spass.value},
    success:function(data){


        console.log(data);
   //data= JSON.parse(data);
   alert(data);
//  if(data=='S'){
//    alert('Saved successfully');
// }

//  else{
//     alert('Some issue');
//  }
}
    
 })
    
  }
  
  function deletebutton(){
    console.log("hi");

// let patpayn=document.getElementById("patnn");
// let patpaye=document.getElementById("pate");

 console.log(stafn);
 $.ajax({
     
     type: 'POST',
     url: 'addelstaff.php',
     data: {pn:stafn,pe:stafe},
     success:function(data){
 
//alert(data);
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