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
                <img src="logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="homepage.html">HOME</a>
                    <a href="homepage.html">ABOUT US</a>
                <a href="homepage.html">CONTACT </a>
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
                    <input type="text" placeholder="Enter your address" required="" id="address" maxlength="300">
                </div>
                <div>
                    <input type="password" placeholder="Enter Password" required="" id="password" maxlength="15"/>
                    <button id="eyebtn" onclick="visible();">
                        <span class="material-symbols-outlined">
                        visibility
                        </span></button>
                    
                </div> 
                <div>
                    <input type="password" placeholder="Confirm Password" required="" id="cpassword" maxlength="15"/>
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
                <a href="homepage.html"><span class="material-symbols-outlined"> chevron_right</span>HOME</a>
            <a href="homepage.htmlt"><span class="material-symbols-outlined">chevron_right</span>ABOUT US</a>
            <a href="homepage.html"><span class="material-symbols-outlined">chevron_right</span>CONTACT US</a>
                
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
var regexpas=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
var regexuse=/^(?=.*[0-9])[a-zA-Z0-9]{6,16}$/;
var regexem=/^\S+@\S+\.\S+$/;
if(email.value.length!=0 && regexem.test(email.value))
{
if(username.value.length!=0 && regexuse.test(username.value))
{
if(phone.value.length!=0 && phone.value.length==10 )
{
if(pass.value.length!=0 && regexpas.test(pass.value))
{

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
    alert("Invalid password.The password must be of minimum 8 characters and should contain a digit, an alphabet and a special character.");
}

}
else{
    alert("Invalid contact number.The contact must contain 10 digits.");
}
}
else{
    alert("Invalid username.The username should contain atleast 8 characters including alphabet and digit ");
}
}
else{
    alert("Invalid email.Please include ‘@’ in the email address");
}
}  
//  let valid=false;
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