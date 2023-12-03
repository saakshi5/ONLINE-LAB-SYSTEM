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
    
    $sql=mysqli_query($conn,"SELECT * FROM patient WHERE patient_username='$use'");
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
        <title>Customer Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="customer.css">
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
                <!-- </div>
                 <div class="user"> -->
                    <img src="images/user.png" style=" height: 50px; width:50px; margin-right: 1rem; margin-left:1.5rem; align-items:center; padding: 5px;" class="user">
                    <p id="usern" style="color:black; margin-left:2.4rem;"></p>
 
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
                        <a href="test.php">
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
                        <a href="profilee.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            person
                            </span></span>
                        <span class="tittle"> Edit Profile</span>
                       
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

         <!-- <div class="sidebar">
            <a href="#">
                <span><i class="fa fa-users" aria-hidden="true"></i></span>
                <h3>Dashboard</h3>
            </a>
         </div> -->
        <div class="main">
        <div class="cardbox">


            <div class="card">

                <div class="iconbox">
                    <a href="customer.html">
                        <span class="material-symbols-outlined">
                            dashboard
                            </span> </a>
                </div>
                

                <div>
                   <!-- <div class="numbers">Book</div>  -->
                   <a href="customer.html">
                    <div class="cardname">Dashboard</div></a>
                </div>
            </div>


            <div class="card">

                <div class="iconbox">
                    <a href="test.php">
                        <span class="material-symbols-outlined">
                            science
                            </span></a>
                </div>

                <div>
                    <a href="test.html">
                   <div class="numbers">20+ Tests</div> 
                    <div class="cardname">Available</div></a>
                </div>
            </div>  

                    
            <div class="card">

                <div class="iconbox">
                    <a href="book.html">
                        <span class="icon"> <span class="material-symbols-outlined">
                            list_alt
                            </span></a>
                </div>

                <div>
                    <a href="book.html">
                   <div class="numbers">Schedule Your</div> 
                    <div class="cardname">Appointment</div>
                    </a>
                </div>
            </div>
                    
                    <div class="card">

                        <div class="iconbox">
                            <a href="pay.html">
                                <span class="icon"><span class="material-symbols-outlined">
                                    payments
                                    </span></a>
                        </div>
        
                        <div>
                            <a href="pay.html">
                           <div class="numbers">Safe & Secure</div> 
                            <div class="cardname">Payment</div>
                            </a>
                        </div>
                    </div>
            
        </div>
      </div>


      
<script>
    let n=document.getElementById('usern');
 n.innerText="<?php echo $_SESSION['user_name'] ?>";
// n.innerText="world";
    </script>
    </body>
</html>
