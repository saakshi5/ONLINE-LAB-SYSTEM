<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
        <script src="system.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="profile.css">
        <title>Edit Profile</title>
        
    </head>
    <body onload="display();">

        <header class="title">
            <div>
                <img src="images/logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading" style="left:8px;">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="index.html">HOME</a>
                    <a href="index.html">ABOUT US</a>
                <a href="index.html">CONTACT </a>
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
                        <a href="customer.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            dashboard
                            </span></span>
                        <span class="tittle"> Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="test.html">
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
                        <a href="profile.html">
                        <span class="icon"> <span class="material-symbols-outlined">
                            person
                            </span></span>
                        <span class="tittle"> Edit Profile</span>
                    </a>
                    </li>
                    <li>
                        <a href="index.html">
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
            <h2 style="left:500px;">Edit Profile</h2>
            <div class="container-form">
            <form action="#">
           

            <div class="form-field">
                <p>Username:</p>
                <input type="text" placeholder="" id="id" required>
            </div>

            <div class="form-field">
                <p>Name:</p>
                <input type="text" placeholder="" id="name" required>
            </div>


            <div class="form-field">
                <p>Email:</p>
                <input type="email" placeholder="" id="email" required>
            </div>

            <div class="form-field">
                <p>Address:</p>
               <textarea id="address" name="address" rows="4" cols="40" required></textarea>
            </div>

            <div class="form-field">
                <p>Contact No:</p>
                <input type="text" id="contact" required>
            </div>

            <div class="form-field">
                <p>Password:</p>
                <input type="password" id="passw" placeholder="" required>
                <button id="eyebtnn" onclick="visible1();">
                    <span class="material-symbols-outlined">
                    visibility
                    </span></button>
            </div>
                
            <!-- <div class="form-field">
                <button class="btn">Book</button>&nbsp;
                <a href="#">
                <button class="btn modal">Edit <span class="material-symbols-outlined">
                    open_in_new
                    </span></button></a></div>
                -->
            
        </form>
      </div>

      <button class="btn" id="btnn" onclick="openn();">
        Edit<span class="material-symbols-outlined">
        open_in_new</span>
    </button>

   <div class="modal" id="modall">
    <div class="modal-header">
     <div class="tittle">Edit Details</div>
     <button class="close" id="closse" onclick="closee();" ><span class="material-symbols-outlined">
        cancel
        </span></button>
    </div>  
    <div class="modal-body">
    <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">

    <div class="form-field">
                <p>Name:</p>
                <input type="text" placeholder="" id="name1" required/>
            </div>

            <div class="form-field">
                <p>Address:</p>
               <textarea id="address1" name="address" rows="4" cols="40" required></textarea>
            </div>

            <div class="form-field">
                <p>Email:</p>
                <input type="text" id="e1" required>
            </div>

            <div class="form-field">
                <p>Contact No:</p>
                <input type="text" id="con" required>
            </div>

            <div class="form-field">
                <p>Password:</p>
                <input type="password" placeholder="" id="password" required/>
                <button id="eyebtn" onclick="visible();">
                    <span class="material-symbols-outlined">
                    visibility
                    </span></button>
            </div>
          
            <div class="form-field">
                <p>Confirm Password:</p>
                <input type="password" placeholder="" id="cpassword" required/>
                <button id="eyebtn-2" onclick="visible();">
                    <span class="material-symbols-outlined">
                    visibility
                    </span></button>
            </div>
          
            <div>
                <a href="#">
                <button class="btn" onclick="edit();">Save Changes</button></a></div>
        </form>
    </div>
 </div>
<div id="overlay"></div>

</div>  

<!-- <script> 

//     const openbutton =document.getElementById('btnn');
// const closebutton =document.getElementById('closse');

// function openn(){
//     console.log('hiii');
// const modal =document.getElementById('modall');
// const overlay =document.getElementById('overlay');
// modal.style.display = 'block';
// overlay.style.display = 'block';
// modal.style.transform= 'translate(-50%,-50%) scale(1)';
// // modal.style.transform= 'translate scale(1)';
// //   modal.add();
// //   overlay.add();
// }

// function closee(){
//     const modal =document.getElementById('modall');
// const overlay =document.getElementById('overlay');
// modal.style.display = 'none';
// overlay.style.display = 'none';
// }
</script>
-->
    </body>
</html>

<script>
      function visible(){
        let pass=document.getElementById("password");
        if(pass.type=="password")
        {
            pass.type="text";
        }
        else{
            pass.type="password";
        }


        let cpass=document.getElementById("cpassword");
        if(cpass.type=="password")
        {
            cpass.type="text";
        }
        else{
            cpass.type="password";
        }
    }


    function visible1(){
        let pass=document.getElementById("passw");
        if(pass.type=="text")
        {
            pass.type="password";
        }
        else{
            pass.type="text";
        }


        // let cpass=document.getElementById("cpassword");
        // if(cpass.type=="password")
        // {
        //     cpass.type="text";
        // }
        // else{
        //     cpass.type="password";
        // }
    }
    let name=document.getElementById("name");
let email=document.getElementById("email");
    function display(){

let add=document.getElementById("address");
let contact=document.getElementById("contact");
let pw=document.getElementById("passw");
let id=document.getElementById("id");



let  patname="<?php echo $_SESSION['user_name'] ?>";
let patpassword="<?php echo $_SESSION['password'] ?>";

id.value=patname;
pw.value=patpassword;
//console.log(name);

//edit profile
let n=document.getElementById("name1");
let e1=document.getElementById("e1");
let add1=document.getElementById("address1");
let con1=document.getElementById("con");
let pw1=document.getElementById("password");
let pw2=document.getElementById("cpassword");
//let username=document.getElementById("uname");


// username.value=patname;
pw1.value=patpassword;
pw2.value=patpassword;

$.ajax({
    
    type: 'POST',
    url: 'details.php',
    data: {pn:patname,p:patpassword},
    success:function(data){


       // console.log(data);
    dataa= JSON.parse(data);

  name.value=dataa[0].patient_name;
 contact.value=dataa[0].patient_contact;
 email.value=dataa[0].patient_email;
 add.value=dataa[0].patient_address;



n.value=dataa[0].patient_name;
 con1.value=dataa[0].patient_contact;
 e1.value=dataa[0].patient_email;
 add1.value=dataa[0].patient_address;
console.log(dataa[0].patient_name);
 //console.log(patname.value);
        }
    
    })
    
    }

    function edit(){

        
//edit profile
 let n=document.getElementById("name1");
let e1=document.getElementById("e1");
let add1=document.getElementById("address1");
let con1=document.getElementById("con");
let pw1=document.getElementById("password");
let pw2=document.getElementById("cpassword");
// let username=document.getElementById("username");
console.log(n.value);

// let  patname="<?php //echo $_SESSION['user_name'] ?>";
// let patpassword="<?php //echo $_SESSION['password'] ?>";
// username.value=patname;
// pw1.value=patpassword;
// pw2.value=patpassword;

$.ajax({
    
    type: 'POST',
    url: 'profile.php',
    data: {name:name.value,email:email.value,n:n.value,p:pw1.value,e1:e1.value,add1:add1.value,con1:con1.value,pw2:pw2.value},
    success:function(data){


        console.log(data);
   //data= JSON.parse(data);
if(data=='S'){
   alert('Saved successfully');
}
// else if(data=='NS'){
//     console.log('Not Saved successfully');
// }
//  con1.value=dataa[0].patient_contact;
//  e1.value=dataa[0].patient_email;
//  add1.value=dataa[0].patient_address;
// console.log(dataa[0].patient_name);
 //console.log(patname.value);
 else{
    alert('Some issue');
 }
        }
    
    })
    

    }
</script>