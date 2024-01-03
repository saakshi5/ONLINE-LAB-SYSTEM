<?php
session_start();
$servername ="localhost";
$username ="id21638614_root";
$password ="Healthcare@2024";
$database ="id21638614_labsystemdb1";
$conn =mysqli_connect($servername,$username,$password,$database);


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
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="admin_payment.css">
        <title>Accounts</title>
        </head>
    <body onload="generatepatpay();">

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
           <h2>Accounts</h2>
           <div class="search"><lable>
            <input type="text" placeholder="Search here">
            <div class="butt"><button class="btn-1">Go</button></div>
            <div class="iconn">
                <span class="material-symbols-outlined">
                    search
                    </span> </div>
        </lable>
        </div>
        <a href="#" class="btn" onclick="addtransdetails();"><span class="material-symbols-outlined">
            add
            </span>  Add Transaction</a>
           <!-- <div class="details">

           <div class="patient-details" onclick="generatepatpay(); ">
           <p>For Patient Payment Detalis:-</p>
           <div class="btn">
            <a href="#">
                <span class="material-symbols-outlined">
                add
                </span>  
                Patient File</a> </div>
         </div>

            <div class="staff-details" onclick="createstaffdata();">
            <p>For Staff Payment Detalis:-</p>
            <div class="btn">
            <a href="#">
                 <span class="material-symbols-outlined">
                add
                </span> 
                Staff File</a></div>
            </div>

         </div> -->


         
    <!-- staff      -->
<!-- <div id="stafftbox">
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
            
            <div class="table-cell last-cell">
                <p>Action</p>
            </div>
            

        </div> 


<div id="stafftable-boxx">
      
           <div class="table-row">
            <div class="table-cell first-cell">
                <p id="adsid">28855</p>
            </div>
       
            <div class="table-cell">
                <p id="adsname">rahul</p>
            </div>
        
            <div class="table-cell">
                <p id="adsemail">rahul@gmail.com</p>
            </div>
       
            <div class="table-cell">
                <p id="adsstatus">paid</p>
            </div>
            <div class="table-cell last-cell">
                <p id="adsbutton"><button class="btn-2" onclick="openn();">
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
        </div> 

        
    </div>
   
       
</div>
    </div> -->



<div id="patienttbox">
            <div class="table-box">
                <div class="table-row table-head">

                    <div class="table-cell">

                        <p>Account Holder Name</p>
                    </div>
                    <div class="table-cell last-cell">
                        <p> Patient Name</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Email</p>
                    </div>
                    <div class="table-cell">
                        <p>Amount</p>
                    </div>
                    

                    <div class="table-cell">
                        <p>Status</p>
                    </div>
                    
                    <div class="table-cell">
                        <p>Action</p>
                    </div>
                    

                </div> 
        <div id="table-boxx">
                  <!-- <div class="table-row">
                    <div class="table-cell first-cell">
                        <p>23655</p>
                    </div>
               
                    <div class="table-cell">
                        <p>isha</p>
                    </div>
                
                    <div class="table-cell">
                        <p>isha@gmail.com</p>
                    </div>
               
                    <div class="table-cell">
                        <p>paid</p>
                    </div>

                    <div class="table-cell last-cell">
                        <p class="butt" id="adpb">
                        <button class="btn-2" onclick="openn();">
                        <span class="material-symbols-outlined">
                            edit
                            </span>
                     </button>
                     <button class="btn-3" onclick="deleteb();">
                        <span class="material-symbols-outlined">
                            delete
                            </span></button>
                        </p>
                    </div>
                </div> -->
            
            </div>
               
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
                <p>Enter Patient name:</p>
                <input type="text" name="pname" id="pname" required/></div>
                <div class="form-field">        
                <p>Enter Email:</p>
                <input type="text" name="pemail" id="pemail" required/></div>
                <!-- <div class="form-field">        
                 <p>Enter Status:</p>
                <input type="text" name="amt" id="pstatus" required/></div> -->
                
                <div class="form-field">        
                <p>Enter Account Holder's Name:</p>
                <input type="text" name="ac" id="acname" required/></div>
                <div class="form-field">        
                    <p>Enter Account no.:</p>
                    <input type="text" name="num" id="num" required/>
                </div>
                <div class="form-field">        
                <p>Enter Bank name:</p>
                <input type="text" name="bname" id="bname" required/>
            </div>
            <div class="form-field">        
                <p>Enter Branch name:</p>
                <input type="text" name="brname" id="brname" required/>
            </div>
            <div class="form-field">        
                <p>Enter Amount:</p>
                <input type="text" name="amt" id="amt" required/>
            </div>
            <div class="form-field">        
                <p>Enter Transaction Date:</p>
                <input type="date" name="pname" id="tdate" required/>
            </div>
            <div>
                <a href="#">
                <button class="edit" onclick="createpatpay();">Submit</button></a></div>
            </form>
            </div>
     </div>      
          
<div id="overlay"></div>

<!-- 
<div class="modal" id="emodall">
    <div class="modal-header">
     <div class="tittle">Edit Details</div>
     <button class="close" id="closse" onclick="closee();" ><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="modal-body">
        <form>
            <div class="eform-field">
                <p> Do you want to send the appointment confirmation email to patient? </p>
                <input type="text" placeholder="" id="se"/> 
            </div>
            <br/>
            <div>
                <a href="#">
                <button class="edit" onclick="sendemail(e);">Yes</button></a>
            <a href="#">
             <button class="edit" onclick="notsendemail();">No</button></a></div>
        </form>
    </div>
 </div>
<div id="overlay"></div> -->

    </div>  

    </body>
</html>






<script>
     
let mm1=document.getElementById('st');
let acnum=document.createElement('p');
acnum.setAttribute('id', 'acnum');

let patnn=document.createElement('p');
patnn.setAttribute('id', 'patnn');

let pate=document.createElement('p');
pate.setAttribute('id', 'pate');

function notsendemail(){

    header('location:admin_paymentt.php');
}

function sendemail(email){
   
   //console.log("sendemail");
    //console.log("sendemail");
   console.log(email);
//alert("helloo");

    Email.send({
    SecureToken : "1829a468-3717-44a4-be8c-20f9c7f9b4f6",
    //76044bd9-ec82-4a13-ba1e-232ab2ac399d
    //Host : "smtp.elasticemail.com",
    // Username : "healthcarepathlabs2024@gmail.com",
    // Password : "2ABAFF005BE9CAEB639C50A36A2806B45EA3",
    //Password:"bqdewfamhteafsso",
    To : "savansatmas2430@gmail.com",
    From :"healthcarepathlabs2023@gmail.com",
    Subject : "Pathalogy test Appointment Confirmation",
    Body : "Your transaction is verified and your appointment is confirmed as per the given schedule."
}).then(
  message => alert(message,"success")
  //alert('otp sent to mail. Please check spam.')
  
);
}










function emailconf(email){
    console.log("email confirmation");

    console.log(email);
    const modal =document.getElementById('emodall');
const overlay =document.getElementById('overlay');
modal.style.display = 'block';
overlay.style.display = 'block';
modal.style.transform= 'translate(-50%,-50%) scale(1)';
}



  function openn(e){
    console.log(e.target.parentNode.parentNode.parentNode.parentNode.childNodes);
    eb=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[4].innerText;
    console.log(eb);
    em=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[2].innerText;
    console.log(em);

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
    const emodall =document.getElementById('emodall');
const overlay =document.getElementById('overlay');
modal.style.display = 'none';
delmodal.style.display = 'none';
addmodal.style.display='none';
emodall.style.display='none';
overlay.style.display = 'none';
}

function deleteb(e){
    console.log('delete data');
    n=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;
  console.log(n);
    e=e.target.parentNode.parentNode.parentNode.parentNode.childNodes[2].innerText;
   console.log(e);
    const delmodal =document.getElementById('delmodall');
const overlay =document.getElementById('overlay');
delmodal.style.display = 'block';
overlay.style.display = 'block';
delmodal.style.transform= 'translate(-50%,-50%) scale(1)';
patnn=n;
pate=e;
//console.log(patnn);
}


function addtransdetails(){
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
    
    
    
        function generatepatpay(){
            $.ajax({
    
    type: 'POST',
    url: 'admin_payment.php',
    data: {x:'Patient Payment'},
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

    
    
    
     let btn3= document.createElement('button');  //edit button
    btn3.classList.add('btn-2');
    btn3.disabled = false;
    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');
     spann.innerHTML='unpaid';

    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'actions');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');
    
    
    
    //rows and cols
     let tbox1=document.getElementById('table-boxx');
    
    tbox1.appendChild(tr);
    tr.appendChild(tcell1);
    tcell1.innerText=dataa[i].ac_holdername;
    
    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].patient_name;
    
    
    tr.appendChild(tcell3);
    tcell3.innerText=dataa[i].patient_email;
    
    
    tr.appendChild(tcell4);
    tcell4.innerText=dataa[i].actrans_amt;
    
    tr.appendChild(tcell5);
    tcell5.appendChild(btn3);
    btn3.appendChild(spann);
    spann.innerHTML=dataa[i].actrans_status;

    
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
    let email=e.target.parentNode.parentNode.parentNode.childNodes[2].innerHTML;
    console.log(email);
     let s=e.target.parentNode.childNodes[0].childNodes[0];
       //let result = JSON.stringify(s);
      // console.log(s);
    let ss=s.textContent;
    console.log(ss);
    if(ss=="paid"){
        btn3.disabled=true;
        //alert('paid');
    }
    if(ss=="unpaid"){
        if(confirm(" Do you want to send the appointment confirmation email to patient?")){
            
        sendemail(email);
    //     $.ajax({
    
    // type: 'POST',
    // url: 'settrans.php',
    // data: {email:email},
    // success:function(data){
    //     console.log(data);
    //     console.log("updated");
    //     //alert('updated');
       
    //  }
    // });
    // btn3.addEventListener('click',e=>emailconf(e));
    //btn3.disabled=true;

        }

    }

    }
     }
    
    }
    }
     });
        }


        function deletebutton(){
    console.log("hi");

// let patpayn=document.getElementById("patnn");
// let patpaye=document.getElementById("pate");

 console.log(patnn);
 $.ajax({
     
     type: 'POST',
     url: 'addeltrans.php',
     data: {pn:patnn,pe:pate},
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
        
    
    //     function generatestaffpay(){
    //         $.ajax({
    
    // type: 'POST',
    // url: 'staff.php',
    // data: {x:'Staff Payment'},
    // success:function(data){
    //     // console.log(data);
    
    // //  if(data =='E')
    // //  {
    
    // //  }
    
    //  if(data =='NE'){
    //  alert('Not exists');
    //  }
    //  else {
    // //  alert('Exists');
    // dataa= JSON.parse(data);
    //     console.log(dataa[0].staff_name);
    
    
    // for(let i=0; i<dataa.length;i++) {
    
    //  let tr=document.createElement('div');
    // tr.classList.add('table-row');  
    
    // let tcell1=document.createElement('div');
    //  tcell1.classList.add('table-cell','first-cell');
    
    //  let tcell2=document.createElement('div');
    //  tcell2.classList.add('table-cell');
    
    //  let tcell3=document.createElement('div');
    //  tcell3.classList.add('table-cell');
    
    //  let tcell4=document.createElement('div');
    //  tcell4.classList.add('table-cell');
    
    //  let tcell5=document.createElement('div');
    //  tcell5.classList.add('table-cell','last-cell');

    
    
    
    // let span= document.createElement('span');  //delete button
    // span.classList.add('material-symbols-outlined');
    // span.innerHTML='edit';
    
    // let span2= document.createElement('span');  //delete button
    // span2.classList.add('material-symbols-outlined');
    // span2.innerHTML='delete';
    
    
    // let p=document.createElement('p');  //paragraph
    // p.setAttribute('id', 'adsbutton');
    
    
    // //create button
    // let btn1= document.createElement('button');  //edit button
    // btn1.classList.add('btn-2');
    
    // let btn2= document.createElement('button');  //delete button
    // btn2.classList.add('btn-3');
    
    
    
    // //rows and cols
    //  let tbox1=document.getElementById('stafftable-boxx');
    
    // tbox1.appendChild(tr);
    // tr.appendChild(tcell1);
    // tcell1.innerText=dataa[i].staff_name;
    
    // tr.appendChild(tcell2);
    // tcell2.innerText=dataa[i].staff_email;
    
    
    // tr.appendChild(tcell3);
    // tcell3.innerText=dataa[i].staff_role;
    
    
    // tr.appendChild(tcell4);
    // tcell4.innerText=dataa[i].staff_salary;

    
    // tr.appendChild(tcell5);
    // tcell5.appendChild(p);
    // p.appendChild(btn1);
    // btn1.appendChild(span);
    // p.appendChild(btn2);
    // btn2.appendChild(span2);
    
    // btn1.addEventListener('click',openn);
    // btn2.addEventListener('click',deleteb);
    
    //  }
    
    // }
    // }
    //  });
    //     }
    function editbutton(){
 
 // let mm2=document.getElementById('st');
 console.log(mm1.value);
 //console.log(acnum);
 $.ajax({
     
     type: 'POST',
     url: 'adpay.php',
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
     
     })
 
    
  }

  function createpatpay(){
    let pname=document.getElementById("pname");
let pemail=document.getElementById("pemail");
  let pstatus=  document.getElementById("pstatus");
let tdate=document.getElementById("tdate");
let bname=document.getElementById("bname");
let brname=document.getElementById("brname");
let aname=document.getElementById("acname");
let amt=document.getElementById("amt");
let anum=document.getElementById("num");
$.ajax({
    
    type: 'POST',
    url: 'addtransdetails.php',
    data: {pn:pname.value,status:pstatus.value,amt:amt.value,p:pemail.value,date:tdate.value,bn:bname.value,br:brname.value,acn:aname.value,accnum:anum.value},
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
    
    })
    
  }
    </script>