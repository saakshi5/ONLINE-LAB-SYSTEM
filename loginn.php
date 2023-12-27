<?php
session_start();
// $use=$_SESSION['user_name'];
// echo $use;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="system.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Log In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="login.css">
        
    </head>
    <body>


        <header class="title">
            <div>
                <img src="images/logo.png" alt="logo png" class="logo"></div>
                <div><p id="heading">Healthcare Pathlabs</p> </div>
            <nav class="navbar">
                <div>
                    <a href="homepage.html">HOME</a>
                    <a href="homepage.html">ABOUT US</a>
                <a href="homepage.html">CONTACT </a>
                </div>
                
                <div id="menu-btn">
                    <span class="material-symbols-outlined">
                        menu
                        </span>
                </div> 
            </nav>
           
        </header>




        <div class="container">
            <section id="content">
                <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" onsubmit="return false;">
                    <h1>Login Form</h1>
                <div>
                    <input type="text" placeholder="username" required="" id="username">
                </div>   
                <div>
                    <input type="password" placeholder="password" required="" id="password"/>
                    <button id="eyebtn" onclick="visible();">
                        <span class="material-symbols-outlined">
                        visibility
                        </span></button>
                </div> 
                <div>
                    <input type="submit" value="Log in" onclick="verification();">
                    <a href="registerr.php" style="font-size: 15px; left:60%;">Don't have account? Register</a>
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
                call
                </span> +456783672</a>
            <!-- <a href="#"><span class="material-symbols-outlined">
                call
                </span>+876584427</a> -->
            <a href="#"><span class="material-symbols-outlined">
                mail
                </span> healthcarepathlabs@gmail.com</a>
            <!-- <a href="#"><span class="material-symbols-outlined">
                mail
                </span> healthcarepathlabs@yahoo.com</a> -->
            <a href="#"><span class="material-symbols-outlined">
                location_on
                </span> Mumbai, -INDIA,400104</a>
            </div>
    
            <div class="box">
                <h3>Follow Us:-</h3>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedIn
                </a>
                </div>
    
                </div>
    
        </section> 
        
    </body>
</html>


<script>

// function login(){
//     let username=document.querySelector('#username');
// let password=document.querySelector('#password');

// $.ajax({
// type: 'POST',
// url: 'login.php',
// data: {use:username.value,pass:password.value},
// success:function(data){
//   console.log(data);
//   if(data =='A'){
//     window.location='admin.html';

//   }
//   else if(data =='P'){
//  window.location='patient.html';
//   }
//   else if(data =='Staff'){
//     window.location='staff.html';

//   }
//   else{
//     alert('Some issue in login');
//   }
// }
// });

// }
function visible(){
        let pass=document.getElementById("password");
        if(pass.type=="password")
        {
            pass.type="text";
        }
        else{
            pass.type="password";
        }
    }


    function verification(){
let username=document.querySelector('#username');
let password=document.querySelector('#password');

        console.log('verification');

        $.ajax({

type: 'POST',
url: 'login.php',
data: {use:username.value,pass:password.value},
success:function(data){
  console.log(data);
//   alert(data);
//   if(data=='CP'){
// username="<?php //echo $_SESSION['user_name'] ?>";

    // alert('Correct username and password');
  if(data =='A'){
// $_SESSION['user_name'] = $username;
// $_SESSION['password'] = $password;
alert("Correct credentials");
    window.location='admin.php';

  }
  else if(data =='P'){
    
// $_SESSION['user_name'] = $usename;
// $_SESSION['password'] = $password;

//password=$_SESSION['password'];
console.log(username)
alert("Correct credentials");
 window.location='customer.php';
  }

  else if(data =='Staff'){
      alert("Correct credentials");
    window.location='lab.php';

  }
 
  else if(data=='ICP'){
    alert('correct username and Incorrect password');
  }

  else if(data=='Incorrect'){
    alert('Incorrect username');
  }
  
  else{
 alert('Some issues');
  }

  
}
})
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