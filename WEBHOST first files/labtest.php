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
    
    $sql=mysqli_query($conn,"SELECT * FROM staff WHERE staff_username='$use'");
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

?><!DOCTYPE html>
<html>
    <head>
       <!-- <script src="system.js"></script> -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="test.css">
        <title>Tests</title>
    </head>
    <body onload="generatetest();">

        <header class="title">
            <div>
                <img src="logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading" style="left:8px;">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="homepage.html">HOME</a>
                    <a href="homepage.html">ABOUT US</a>
                <a href="homepage.html">CONTACT </a>
                <!-- </div>
                 <div class="user"> -->
                    <img src="user.png" style=" height: 50px; width:50px; margin-right: 1rem; margin-left:1.5rem; align-items:center; padding: 5px;" class="user">
                 </div>
                <!-- <div id="menu-btn" class="fa fa-bars"> </div> -->
            </nav>
           
        </header>



        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="lab.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            dashboard
                            </span></span>
                        <span class="tittle"> Dashboard</span>
                    </a>
                    </li>

                    <li>
                        <a href="labtest.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            science
                            </span></span>
                        <span class="tittle"> Available Tests</span>
                    </a>
                    </li>
                    <li>
                        <a href="lab_pat.php">
                        <span class="icon"><span class="material-symbols-outlined">
                            groups
                            </span></span>
                        <span class="tittle"> Patients</span>
                    </a>
                    </li>
                <li>
                    <li>
                        <a href="appointt.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            heart_plus
                            </span></span>
                        <span class="tittle"> Appointments</span>
                    </a>
                    </li>
                    <li>
                        <a href="samplee.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            colorize
                            </span></span>
                        <span class="tittle"> Samples</span>
                    </a>
                    </li>
                   
                    <li>
                        <a href="lab_pay.html">
                        <span class="icon"> <span class="material-symbols-outlined">
                            list_alt
                            </span></span>
                        <span class="tittle">Transaction</span>
                    </a>
                    </li>
                    <li>
                        <a href="report.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            list_alt
                            </span></span>
                        <span class="tittle"> Reports</span>
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
            <h2 style="left:500px;">Tests Available</h2>
            <div class="search"><lable>
                <input type="text" placeholder="Search here">
                <div class="butt"><button class="btn-1">Go</button></div>

                <div class="iconn">
                    <span class="material-symbols-outlined">
                        search
                        </span></div>
            </lable>
            </div>
            <a href="#" class="btn" onclick="editbutton1();"><span class="material-symbols-outlined">
                add
                </span> Add Test</a>
 <div id="patienttestbox">              
            <div class="table-box">
                <div class="table-row table-head">
                    <div class="table-cell last-cell">
                        <p>Test Id</p>
                    </div>
               
                    <div class="table-cell">
                        <p>Test Name</p>
                    </div>

                    <div class="table-cell">
                        <p>Test Cost</p>
                    </div>

                    <div class="table-cell">
                        <p>Pre-requisites</p>
                    </div>

                    <div class="table-cell">
                        <p>Action</p>
                    </div>
                </div>
<div id="adptest">
                <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                        <p id="adptid">001</p>
                    </div>
               
                    <div class="table-cell">
                        <p id="adptn">CBC</p>
                    </div>
                    <div class="table-cell">
                        <p id="adptcost">1000</p>
                    </div>
                    <div class="table-cell last-cell">
                        <p id="adptb"><button class="btn-2" onclick="openn();">
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
                    <p>Test Cost:</p>
                    <input type="text" placeholder="" id="st">
                </div>
                
                <div class="form-field">
                    <p>Test Name:</p>
                    <input type="text" placeholder="" id="tn">
                </div>
                <div class="form-field">
                <p>Test Pre-requisites:</p>
                <input type="text" placeholder="" id="treq">
            </div>
                <div>
                    <a href="#">
                    <button class="edit" onclick="createtests();">Save Changes</button></a></div>
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
                <p>Enter Test id:</p>
               <input type="text" name="amt" id="tid" required/></div>
               <div class="form-field">             
                <p>Enter Test name:</p>
                <input type="text" name="tname" id="tname" required/></div>
                <div class="form-field">        
                <p>Enter Test Amount:</p>
                <input type="text" name="amt" id="tamt" required/></div>
                <div class="form-field">        
                <p>Enter Test Pre-requisites:</p>
                <input type="text" name="treq" id="treq" required/></div>
            <div>
                <a href="#">
                <button class="edit" onclick="editbutton();">Submit</button></a></div>
            </form>
            </div>
     </div>      
          
<div id="overlay"></div>
    </div>  
//pre-requisites
<div class="modal" id="modal3">
    <div class="modal-header">
     <div class="tittle">Tests Pre-Requirements</div>
     <button class="close" id="close" onclick="closeee();" ><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="modal-body">
        <form>
            <div class="form-field">
                <!-- <p>Status:</p>
                <input type="text" placeholder=""  id="st" /> -->
                <textarea cols="67" id="tre" rows="8"></textarea>
            </div>
        </form>
    </div>
 </div>
<div id="overlay"></div>

    </body>
</html>


<script>
    
    let treq=document.getElementById('treq');
let mm1=document.getElementById('st');
let testn=document.getElementById('tn');
let acnum=document.createElement('p');
acnum.setAttribute('id', 'acnum');//cost

let adtname=document.createElement('p');
adtname.setAttribute('id', 'adtname');


let mo=document.getElementById("modal3");

let adtid=document.createElement('p');
adtid.setAttribute('id', 'adtid');

let tid=document.createElement('p');
tid.setAttribute('id', 'atid');
  function openn(e){
    // console.log(e.target.parentNode.parentNode.parentNode.parentNode.childNodes);
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[2].innerText;//test cost
 
    ttn=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;//test name
    // console.log(ttn);
    ti=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//test id
    // console.log(ti);
    tree=mo.children[1].childNodes[1].childNodes[1].childNodes[3].innerHTML;//test req
    console.log(tree);

const modal =document.getElementById('modall');
const overlay =document.getElementById('overlay');
modal.style.display = 'block';
overlay.style.display = 'block';
modal.style.transform= 'translate(-50%,-50%) scale(1)';
mm1.value=eb;
testn.value=ttn;
treq.value=tree;
// acnum=eb;//cost
// // console.log(acnum);
// adtname=ttn; // name
// // console.log(adtname);
adtid=ti; // id
// console.log(adtid);
adtreq=treq;
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
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;//test cost
    // console.log(eb);
    tid=eb;
    console.log(tid);

    const delmodal =document.getElementById('delmodall');
const overlay =document.getElementById('overlay');
delmodal.style.display = 'block';
overlay.style.display = 'block';
delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
}

function editbutton1(){
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
//pre-requisites
function opennn(){
        console.log('hiii');
    const modal =document.getElementById('modal3');
    const overlay =document.getElementById('overlay');
    modal.style.display = 'block';
    overlay.style.display = 'block';
    modal.style.transform= 'translate(-50%,-50%) scale(1)';
    // modal.style.transform= 'translate scale(1)';
    //   modal.add();
    //   overlay.add();
    }
    
    function closeee(){
    const modal =document.getElementById('modal3');
    // const delmodal =document.getElementById('delmodall');
    // const addmodal =document.getElementById('addmodall');
const overlay =document.getElementById('overlay');
modal.style.display = 'none';
// delmodal.style.display = 'none';
// addmodal.style.display='none';
overlay.style.display = 'none';
}

function prefetch(e,data){
 //console.log(e,data);
preid=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
console.log(tre);

// console.log("data",data[0].test_id);

for(let i=0; i<data.length; i++){


    
        // console.log("data",data[i].test_id);
        if(data[i].test_id==preid){
            console.log("prerq",data[i].prereq);
            tre.defaultValue=dataa[i].prereq;
        }
}

}

function generatetest(){
    $.ajax({

type: 'POST',
url: 'admin_test.php',
data: {x:'Tests'},
success:function(data){
// console.log(data);
dataa= JSON.parse(data);
console.log(dataa[0].test_name);

//  if(data =='E')
//  {

//  }

if(data =='NE'){
alert('Not exists');
}
else {
//  alert('Exists');


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


//create button
let btn1= document.createElement('button');  //edit button
btn1.classList.add('btn-2');

let btn2= document.createElement('button');  //delete button
btn2.classList.add('btn-3');


let span= document.createElement('span');  //delete button
span.classList.add('material-symbols-outlined');
span.innerHTML='edit';

let span2= document.createElement('span');  //delete button
span2.classList.add('material-symbols-outlined');
span2.innerHTML='delete';


let p=document.createElement('p');  //paragraph
p.setAttribute('id', 'idptb');


// let b1=document.createElement('button');
// b1.addEventListener('click',function openn(){
//     console.log('open');
// });


// let b2=document.createElement('button');
// b2.addEventListener('click',() =>deleteb);


let btn3= document.createElement('button');  //edit button
    btn3.classList.add('btn-2');
    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');
    spann.innerHTML='Pre-requisites';
    btn3.addEventListener('click',e=>prefetch(e,dataa));


//rows and cols
let tbox1=document.getElementById('adptest');

tbox1.appendChild(tr);
tr.appendChild(tcell1);
tcell1.innerText=dataa[i].test_id;

tr.appendChild(tcell2);
tcell2.innerText=dataa[i].test_name;


tr.appendChild(tcell3);
tcell3.innerText=dataa[i].test_cost;


tr.appendChild(tcell4);
    tcell4.appendChild(btn3);
    btn3.appendChild(spann);

tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',e=>openn(e));
btn2.addEventListener('click',e=>deleteb(e));
btn3.addEventListener('click',e=>opennn(e));
}

}
}
});
}


function createtests(){

console.log(adtid);
console.log(adtname);
console.log(acnum);
console.log(adtreq);
$.ajax({
    
    type: 'POST',
    url: 'adtest.php',
    data: {tname:testn.value,tid:adtid,ta:mm1.value,treq:adtreq.value},
    success:function(data){


        console.log(data);
   //data= JSON.parse(data);
//  if(data=='S'){
//    alert('Saved successfully');
// }

//  else{
//     alert('Some issue');
//  }
        }
    
    })
    

}



function editbutton(){
 
let tname=document.getElementById("tname");
let tid=document.getElementById("tid");
let tamt=document.getElementById("tamt");
let treq=document.getElementById("treq");
 //console.log(acnum);
 $.ajax({
     
     type: 'POST',
     url: 'adtest1.php',
     data: {tn:tname.value, tid:tid.value, tamt:tamt.value,treq:treq.value},
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
     
     });
 
    
  }
  
  function deletebutton(){
   // console.log("hi");

// let ttid=document.getElementById("atid");

 console.log(tid);
 $.ajax({
     
     type: 'POST',
     url: 'addeltest.php',
     data: {t:tid},
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