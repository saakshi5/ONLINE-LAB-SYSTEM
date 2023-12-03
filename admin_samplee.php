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
        <link rel="stylesheet" href="sample.css">
        <title>Samples</title>
    </head>
    <body onload="generatesample();">

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
            <h2 style="left:500px;">Samples</h2>
            <div class="search"><lable>
                <input type="text" placeholder="Search here">
                <div class="butt"><button class="btn-1">Go</button></div>

                <div class="iconn">
                    <span class="material-symbols-outlined">
                        search
                        </span>  </div>
            </lable>
            </div>
            <a href="#" class="btn" onclick="addsampledetails();"><span class="material-symbols-outlined">
                add
                </span> Add Sample</a>
 <div id="samplebox">             
            <div class="table-box">
                <div class="table-row table-head">
                    <!-- <div class="table-cell">
                        <p>Patient Id</p>
                    </div> -->
                    <div class="table-cell first-cell">
                        <p>Patient Name</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Patient Email:</p>
                    </div>

                    <div class="table-cell">
                        <p>Test Name</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Status</p>
                    </div>
                    

                    <div class="table-cell">
                        <p>Collection Date</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Action</p>
                    </div>
                    

                </div>
<div id="sampletbox">
                <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                        <p id="sampleid">12365</p>
                    </div>
                    <div class="table-cell">
                        <p id="samplen">Faran</p>
                    </div>
               
                    <div class="table-cell">
                        <p id="sampletestn">CBC</p>
                    </div>
                    
                    <div class="table-cell">
                        <p id="samplestatus">collected</p>
                    </div>
                    

                    <div class="table-cell">
                        <p id="sampledate">6/5/2023</p>
                    </div>
                    
                    <div class="table-cell last-cell">
                        <p id="sampleb"><button class="btn-2" onclick="openn();">
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
                </div>  -->

                </div>

                <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                  
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
                <p>Status:</p>
                <input type="text" placeholder="" id="st"/>
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
                <a href="homepage.html">
                <button class="edit" onclick="deletebutton();">Delete</button></a></div>
        </form>
    </div>
 </div>
<div id="overlay"></div>

<!-- 
    add -->
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
                    <p>Enter Patient name:</p>
                    <input type="text" name="pname" id="pname" required/></div>
                    <div class="form-field">        
                    <p>Enter Email:</p>
                    <input type="text" name="pemail" id="pemail" required/></div>
                    <!-- <div class="form-field">        
                     <p>Enter Status:</p>
                    <input type="text" name="amt" id="pstatus" required/></div> -->
                    <div class="form-field">        
                    <p>Enter Collection Date:</p>
                    <input type="date" name="amt" id="tdate" required/></div>
                    <div class="form-field">        
                    <p>Enter Test name:</p>
                    <input type="text" name="pname" id="testn" required/>
                </div>
    
                
                <div>
                    <a href="#">
                    <button class="edit" onclick="createsamples();">Submit</button></a></div>
                </form>
                </div>
         </div>      
              
    <div id="overlay"></div>

    </div>  

    </body>
</html>





<script>
  
let mm1=document.getElementById('st');
let acnum=document.createElement('p');
acnum.setAttribute('id', 'acnum');

let patn=document.createElement('p');
patn.setAttribute('id', 'patn');

let patee=document.createElement('p');
patee.setAttribute('id', 'patee');

  function openn(e){
    console.log(e.target.parentNode.parentNode.parentNode.parentNode.childNodes);
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[3].innerText;
    //console.log(eb);
    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;
    //console.log(em);

const modal =document.getElementById('modall');
const overlay =document.getElementById('overlay');
modal.style.display = 'block';
overlay.style.display = 'block';
modal.style.transform= 'translate(-50%,-50%) scale(1)';
mm1.value=eb;
acnum=em;
console.log('email',em);
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
    name=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[0].innerText;
    console.log(name);
    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;
    console.log(em);
    console.log('delete data');
    const delmodal =document.getElementById('delmodall');
const overlay =document.getElementById('overlay');
delmodal.style.display = 'block';
overlay.style.display = 'block';
delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
patn=name;
patee=em;
}


function addsampledetails(){
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

// function editbutton1(){
//     // let delb=document.getElementById('deletebutton');
//     window.alert('Edited Successfully');

// }



function createsamples(){
  let pname=document.getElementById("pname");
let pemail=document.getElementById("pemail");
let tname=document.getElementById("testn");
//   let pstatus=  document.getElementById("pstatus");
let tdate=document.getElementById("tdate");
$.ajax({
    
    type: 'POST',
    url: 'samdetails.php',
    data: {pname:pname.value,tn:tname.value,pemail:pemail.value,tdate:tdate.value},
    success:function(data){


        console.log(data);
   //data= JSON.parse(data);
 if(data=='S'){
   alert('Saved successfully');
}

 else{
    alert('Some issue');
 }
        }
    
    });
    

}


    
    
    
        function generatesample(){
            $.ajax({
    
    type: 'POST',
    url: 'admin_sample.php',
    data: {x:'Samples'},
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
        console.log(dataa[0].patient_name);
    
    
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
     tcell5.classList.add('table-cell');

     let tcell6=document.createElement('div');
     tcell6.classList.add('table-cell','last-cell');

    
    
    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'sampleb');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');
    
    
    let btn3= document.createElement('button');  //edit button
    btn3.classList.add('btn-2');
    btn3.disabled = false;
    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');
     spann.innerHTML='not collected';



    //rows and cols
     let tbox1=document.getElementById('sampletbox');
    
    tbox1.appendChild(tr);
    tr.appendChild(tcell1);
    tcell1.innerText=dataa[i].patient_name;
    

        
    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].patient_email;

    tr.appendChild(tcell3);
    tcell3.innerText=dataa[i].test_name;
    
    
    tr.appendChild(tcell4);
    tcell4.appendChild(btn3);
    btn3.appendChild(spann);
    spann.innerHTML=dataa[i].sample_status;
    
    
    tr.appendChild(tcell5);
    tcell5.innerText=dataa[i].sample_collection_date;

    
    tr.appendChild(tcell6);
    tcell6.appendChild(p);
    // p.appendChild(btn1);
    // btn1.appendChild(span);
    p.appendChild(btn2);
    btn2.appendChild(span2);
    
    btn1.addEventListener('click',e=>openn(e));
    btn2.addEventListener('click',e=>deleteb(e));
    btn3.addEventListener('click',e=>statusb(e));

    function statusb(e){
    let email=e.target.parentNode.parentNode.parentNode.childNodes[1].innerHTML;
    console.log(email);
     let s=e.target.parentNode.childNodes[0].childNodes[0];
       //let result = JSON.stringify(s);
    
    let ss=s;
    console.log(ss);
    if(ss=="collected"){
        btn3.disabled=true;
        alert('collected');
    }
    if(ss=="not collected"){
        $.ajax({
    
    type: 'POST',
    url: 'setsam.php',
    data: {email:email.value},
    success:function(data){
        // console.log(data);
        alert('updated');
     }
    });
    btn3.disabled=true;
    }

    }
}
     
    }
    }
     });
        }



        function editbutton(){
 
 // let mm2=document.getElementById('st');
 console.log(mm1.value);
 //console.log(acnum);
 $.ajax({
     
     type: 'POST',
     url: 'adsam.php',
     data: {d:mm1.value,a:acnum},
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

 console.log(patn);
 $.ajax({
     
     type: 'POST',
     url: 'addelsam.php',
     data: {pn:patn,pe:patee},
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