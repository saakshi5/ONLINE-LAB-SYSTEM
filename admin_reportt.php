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
       <script src="system.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="report.css">
        <title>Reports</title>
    </head>
    <body onload="generatereport();">

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
            <h2 style="left:500px;">Patient's Reports</h2>
            <div class="search"><lable>
                <input type="text" placeholder="Search here" id="search">
                <div class="butt" id="butt"><button class="btn-1">Go</button></div>
                <div class="iconn">
                    <span class="material-symbols-outlined">
                        search
                        </span> </div>
            </lable>
            </div>
            <a href="#" class="btn" onclick="addreport();"><span class="material-symbols-outlined">
                add
                </span>  Add Report</a>
           <div id="reportbox">     
            <div class="table-box">
                <div class="table-row table-head">
                    <!-- <div class="table-cell">
                        <p>Patient Id</p>
                    </div> -->
                    <div class="table-cell last-cell">
                        <p>Patient Name</p>
                    </div>
               
                    <div class="table-cell">
                        <p>Patient Email</p>
                    </div>
                    
                    <!-- <div class="table-cell">
                        <p>Status</p>
                    </div> -->
                    
                    
                    <div class="table-cell">
                        <p>Status</p>
                    </div>
                    
                    
                    <div class="table-cell">
                        <p>Report</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Action</p>
                    </div>
                    

                </div>
<div id="reporttbox">
                <!-- <div class="table-row">
                    <div class="table-cell">
                        <p id="rpid">12365</p>
                    </div>
                    <div class="table-cell">
                        <p id="rpn">Faran</p>
                    </div>
               
                    <div class="table-cell">
                        <p id="rtestn">CBC</p>
                    </div>
                    
                    <div class="table-cell">
                        <p id="rstatus">Sent</p>
                    </div>
                    
                    
                    <div class="table-cell last-cell">
                        <p id="rtb"><button class="btn-2" onclick="openn();">
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
                        <p>114</p>
                    </div>
                </div>
               
               
                   </div> -->

            </div>
            <div id="repsearch"></div>
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
                <input type="text" placeholder="" />
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
     <div class="tittle">Add Report</div>
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
                <p>Report:</p>
                <input type="text" name="pemail" id="prep" required/></div>
                <div class="form-field">        
                 <p>Enter Patient Email:</p>
                <input type="text" name="amt" id="pemail" required/></div> 
                 <!-- <div class="form-field">        
                <p>Enter Collection Date:</p>
                <input type="date" name="amt" id="tdate" required/></div>
                <div class="form-field">        
                <p>Enter Test name:</p>
                <input type="text" name="pname" id="testn" required/>
            </div> -->

            
            <div>
                <a href="#">
                <button class="edit" onclick="createrep();">Submit</button></a></div>
            </form>
            </div>
     </div>      
          
<div id="overlay"></div>



    </div>  

    </body>
</html>






<script>
            let searchb=document.getElementById("butt");
    searchb.addEventListener('click',e=>search(e));

    function openn(){
        console.log('hiii');
    const modal =document.getElementById('modall');
    const overlay =document.getElementById('overlay');
    modal.style.display = 'block';
    overlay.style.display = 'block';
    modal.style.transform= 'translate(-50%,-50%) scale(1)';
    // modal.style.transform= 'translate scale(1)';
    //   modal.add();
    //   overlay.add();
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

    function deleteb(){
        console.log('delete data');
        const delmodal =document.getElementById('delmodall');
    const overlay =document.getElementById('overlay');
    delmodal.style.display = 'block';
    overlay.style.display = 'block';
    delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
    }
    
    
    function addreport(){
    console.log('add data');
    const addmodal =document.getElementById('addmodall');
const overlay =document.getElementById('overlay');
addmodal.style.display = 'block';
overlay.style.display = 'block';
addmodal.style.transform= 'translate(-50%,-50%) scale(1)';
}


    
        function generatereport(){
            $.ajax({
    
    type: 'POST',
    url: 'admin_report.php',
    data: {x:'Reports'},
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
    const blob=new Blob(['(dataa[0].report_img)'],{type:'text/plain'});
    const file=new file([blob],'report.txt',{type:'blob.type'});
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
     tcell5.classList.add('table-cell','last-cell');

    
    
    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'rtb');
    
    
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
     spann.innerHTML='not sent'

    //rows and cols
     let tbox1=document.getElementById('reporttbox');
    
    tbox1.appendChild(tr);
    tr.appendChild(tcell1);
    tcell1.innerText=dataa[i].patient_name;
    
    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].patient_email;
    
    
    tr.appendChild(tcell3);
    tcell3.appendChild(btn3);
    btn3.appendChild(spann);
    spann.innerHTML=dataa[i].report_status;
    
    
    tr.appendChild(tcell4);
    tcell4.innerText=file;

    
    tr.appendChild(tcell5);
    tcell5.appendChild(p);
    // p.appendChild(btn1);
    // btn1.appendChild(span);
    p.appendChild(btn2);
    btn2.appendChild(span2);
    
    btn1.addEventListener('click',openn);
    btn2.addEventListener('click',deleteb);
    btn3.addEventListener('click',e=>statusb(e));
    

    function statusb(e){
    let email=e.target.parentNode.parentNode.parentNode.childNodes[1].innerHTML;
    console.log(email);
     let s=e.target.parentNode.childNodes[0].childNodes[0];
       //let result = JSON.stringify(s);
       console.log(s);
    let ss=s;
    console.log(ss);
    if(ss=="paid"){
        btn3.disabled=true;
        alert('sent');
    }
    if(ss=="unpaid"){
        $.ajax({
    
    type: 'POST',
    url: 'setrep.php',
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

 
function search(e){
            let ppid=0;

          let s=document.getElementById("search");
            let n=s.parentNode.childNodes[1].value;
            console.log(n);
            n=n.toLowerCase();
    const tt =document.getElementById('reporttbox');
    const ts =document.getElementById('repsearch');
    tt.style.display = 'none';
    ts.style.display = 'block';
    //ts.style.transform= 'translate(-50%,-50%) scale(1)';

    //console.log(ts.parentNode);

            $.ajax({
    
    type: 'POST',
    url: 'repsearch.php',
   data: {tn:n},
    success:function(data){
//console.log(data);
        dataa=JSON.parse(data);
    console.log(dataa);
        console.log(dataa.length);
        if(data=='N'){
     alert('Patient does not exists');
     }
     else {
    
    // let r=document.querySelectorAll('#testsearch'); //table id
    // //console.log(r);

    // if(r!=null){
    //     r[0].remove();
    // }

    //const tabh=document.querySelector('.table-head');


    //CHANGES 4 SENTENCES
    // let tbox=document.createElement('div');
    // tbox.setAttribute('id',"testsearch");

    //let tab=document.querySelectorAll(".table-box");
    //tabh.after(tbox);



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

ts.appendChild(tr);


let btn3= document.createElement('button');  //edit button
    btn3.classList.add('btn-2');
    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');
    spann.innerHTML='Pre-requisites';
    btn3.addEventListener('click',e=>prefetch(e,dataa));


//rows and cols
//let tbox1=document.getElementById('adptest');

//tbox1.appendChild(tr);
tr.appendChild(tcell1);
tcell1.innerText=dataa[i].patient_name;

tr.appendChild(tcell2);
tcell2.innerText=dataa[i].patient_email;


tr.appendChild(tcell3);
tcell3.innerText=dataa[i].report_status;


tr.appendChild(tcell4);
tcell4.innerText=dataa[i].report_img;
    // tcell4.appendChild(btn3);
    // btn3.appendChild(spann);


tr.appendChild(tcell5);
tcell5.appendChild(p);
// p.appendChild(btn1);
// btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

// btn1.addEventListener('click',e=>openn(e));
btn2.addEventListener('click',e=>deleteb(e));
btn3.addEventListener('click',e=>opennn(e));
     }
  
    }

}
    });
    

        }


        function createreports(){
  let pname=document.getElementById("pname");
let pemail=document.getElementById("pemail");
// let tname=document.getElementById("testn");
 let rep=  document.getElementById("prep");
// let tdate=document.getElementById("tdate");
$.ajax({
    
    type: 'POST',
    url: 'repdetails.php',
    data: {pname:pname.value,pemail:pemail.value,prep:rep.value},
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


    </script>