<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title><script src="system.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="register.css">

    </head>
    <body>


        <header class="title">
            <div>
                <img src="images/logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="index.html">HOME</a>
                    <a href="index.html">ABOUT US</a>
                <a href="index.html">CONTACT </a>
                </div>
                
                <div id="menu-btn" >
                    <span class="material-symbols-outlined">
                        menu
                        </span>
                </div>
            </nav>
           
        </header>




        <div class="container">
            <section id="content">
             <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
                    <h1>Register Now</h1>
                <div>
                    <input type="text" placeholder="Enter username" required="" id="username" maxlength="10">
                </div> 
                <div>
                    <input type="text" placeholder="Enter your name" required="" id="name">
                </div>   
                <div>
                    <input type="email" placeholder="Enter your email" required="" id="email">
                </div>
                <div>
                    <input type="text" placeholder="Enter your phone" required="" id="phone" maxlength="10">
                </div>
                <div>
                    <input type="text" placeholder="Enter your address" required="" id="address">
                </div>
                <div>
                    <input type="password" placeholder="Enter Password" required="" id="password" maxlength="8"/>
                    <button id="eyebtn" onclick="visible();">
                        <span class="material-symbols-outlined">
                        visibility
                        </span></button>
                    
                </div> 
                <div>
                    <input type="password" placeholder="Confirm Password" required="" id="cpassword" maxlength="8"/>
                    <button id="eyebtn-2" onclick="visible();">
                        <span class="material-symbols-outlined">
                        visibility
                        </span></button>
                </div>
                <div>
                    <input type="submit" value="Register" style="align-items: center;" onclick="register();">
                    <!-- <a href="#" style="font-size: 15px;">Register</a> -->
                </div>
                       </form>
            </section>
        </div>




        <section class="footer">
     
        <div class="boxcontainer">
                <!-- <div class="box">
                <h3>Quick Links</h3>
                <a href="index.html"><span class="material-symbols-outlined"> chevron_right</span>HOME</a>
            <a href="index.htmlt"><span class="material-symbols-outlined">chevron_right</span>ABOUT US</a>
            <a href="index.html"><span class="material-symbols-outlined">chevron_right</span>CONTACT US</a>
                
                </div> -->
            <div class="box">
            <h3>CONTACT</h3>
            <a href="#"><span class="material-symbols-outlined">
                call </span> +456783672</a>
            <!-- <a href="#"><span class="material-symbols-outlined">
                call
                </span>+876584427</a> -->
            <a href="#"><span class="material-symbols-outlined">
                mail </span> healthcarepathlabs@gmail.com</a>
            <!-- <a href="#"><span class="material-symbols-outlined">
                mail
                </span> healthcarepathlabs@yahoo.com</a> -->
            <a href="#"><span class="material-symbols-outlined">
                location_on </span> Mumbai, -INDIA,400104</a>
            </div>
            
            <div class="box">
            <h3>Follow Us:-</h3>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebbok</a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedIn
            </a>
            </div>

                </div>
    
        </section> 
<!-- 
        <script>
    let n=document.getElementById('usern');
 n.innerText="<?php echo $_SESSION['user_name'] ?>"; -->

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


    function register(){
        let username=document.querySelector('#username');
let name=document.querySelector('#name');
let email=document.querySelector('#email');
let phone=document.querySelector('#phone');
let address=document.querySelector('#address');
let pass=document.querySelector('#password');
let cpass=document.querySelector('#cpassword');

let validate1=true; let validate2=false;
console.log('register');
    
if(pass.value == cpass.value){

if(username.length>20)
  {
    alert("Username length must not exceed 20 characters");
     validate1=false;
  }
  else if(username.length<10)
  {
    alert("Username length must not be less than 10 characters");
     validate1=false;
  }
  else{
let s=username;let counta=0;let countn=0;
let countc=0;let invalid=0;validate1=true;
    for(let i=0;i<username.length;i++)
    {
let str=s.charAt(i);
if((/[a-zA-Z]/).test(str))
{
  counta+=1;
}
else if(str=='_')
{
  countc+=1;
}
else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
{
  countn+=1;
}
else{
  invalid=1;
  break;
}
    }
    if(invalid==1)
    {
      alert("In username, No space or special character allowed, except underscore(_)");
      validate1=false;
    }
    else if(counta==0)
    {
      alert("In username, Minimum one alphabet required");
       validate1=false;
    }
    else if(countn==0)
    {
      alert("In username, Minimum one number required");
       validate1=false;
    }
  }
  if(pass.length<8)
  {
    alert("Password should not be less than 8 characters");
  }
  else{
let s=pass;let counta=0;let countn=0;
let countc=0;let invalid2=0;validate2=false;
    for(let i=0;i<pass.length;i++)
    {
let str=s.charAt(i);
if((/[a-zA-Z]/).test(str))
{
  counta+=1;
}
else if(str==' ')
{
  invalid2=1;
}
else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
{
  countn+=1;
}
else{
  countc+=1;
}
}
    if(invalid2==1){
      alert("In password, No space character allowed");
    }
    else if(counta==0)
    {
      alert("In password, Minimum one alpahbet required");
    }
    else if(countn==0)
    {
      alert("In password, Minimum one number required");
    }
    else if(countc==0)
    {
      alert("In password, Minimum one special character required");
    }
    else{
      validate2=true;
    }
  }
if(validate1==true && validate2==true)
{
    if(username!=="")
      {
       if(pass!==""){
        $.ajax({
    type:'POST',
    url:'register.php',
    data:{use:username.value,name:name.value,email:email.value,phn:phone.value,pass:password.value,add:address.value},
    success: function(data){
        console.log(data);
     if(data=='S'){
        alert('Registered Successfully');
         window.location='loginn.php';
     }
     else if(data=='EU'){
        alert('Data already exists');
     }
     else{
        alert('Some issue');
     }
    }

        })

}
       else{
        alert("Please enter password");
       }
      }
      else
      {
      alert("Please enter username");
      }

    }
  }
 let valid=false;

}


else{
 alert('Both passwords are not same.');
}

}
</script>


<!-- 
    <body>
    
        <header class="title">
            <div>
                <img src="images/logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="#">HOME</a>
                    <a href="#">ABOUT US</a>
                <a href="#">CONTACT </a>
                </div>
                
                <div id="menu-btn" class="fa fa-bars"> </div>
            </nav>
           
        </header>


    <section class="footer">
     
        <div class="boxcontainer">
            <div class="box">
            <h3>Quick Links</h3>
            <a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"> </i>HOME</a>
            <a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"> </i>ABOUT US</a>
            <a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>CONTACT US</a>
            
            </div>
        

        <div class="box">
            <h3>Follow Us:-</h3>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebbok</a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedIn
            </a>
            </div>

            </div>

    </section>
    </body>
    </html> -->