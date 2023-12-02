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

?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>Laboratorist's Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="lab.css">
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
                    <p id="usern" style="color:black;margin-left:37rem; font-size:14px;"></p>
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
                        
                        <a href="appointt.php">
                        <span class="icon">  <span class="material-symbols-outlined">
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
                        <a href="lab_pay.php">
                        <span class="icon"> <span class="material-symbols-outlined">
                            colorize
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
                        <a href="index.html">
                        <span class="icon"><span class="material-symbols-outlined">
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
            <div class="cardbox">
    
    
                <!-- <div class="card">
    
                    <div class="iconbox">
                        <a href="lab.html">
                            <span class="material-symbols-outlined">
                                dashboard
                                </span> </a>
                    </div>
                    
    
                    <div>
                       <div class="numbers">Book</div> 
                       <a href="lab.html">
                        <div class="cardname">Dashboard</div></a>
                    </div>
                </div> -->
    
                <div class="card">
    
                    <div class="iconbox">
                        <a href="labtest.php">
                            <span class="material-symbols-outlined">
                                science
                                </span></a>
                    </div>
    
                    <div>
                        <a href="labtest.php">
                       <div class="numbers">Tests</div> 
                        <div class="cardname">Available</div>
                        </a> 
                    </div>
                </div>  
                <div class="card">
    
    <div class="iconbox">
        <a href="customer.html">
            <span class="icon"><span class="material-symbols-outlined">
                groups
                </span> </a>
    </div>
    

    <div>
       <!-- <div class="numbers">Book</div>  -->
       <a href="lab_pat.php">
        <div class="cardname">Patients</div>
        <div class="cardname">Details</div></a>
    </div>
</div>

                <div class="card">
    
                    <div class="iconbox">
                        <a href="appointt.php">
                            <span class="material-symbols-outlined">
                                heart_plus
                                </span></a>
                    </div>
    
                    <div>
                        <a href="appoint.php">
                       <div class="numbers">10+ Pending</div> 
                        <div class="cardname">Appointments</div></a>
                    </div>
                </div>  
    
                        
                <div class="card">
    
                    <div class="iconbox">
                        <a href="samplee.php">
                            <span class="material-symbols-outlined">
                                colorize
                                </span></a>
                    </div>
    
                    <div>
                        <a href="samplee.php">
                       <div class="numbers">Collection of</div> 
                        <div class="cardname">Samples</div>
                        </a>
                    </div>
                </div>
                        
                <div class="card">
    
                    <div class="iconbox">
                        <a href="lab_pay.php">
                            <span class="icon"><span class="material-symbols-outlined">
                                payments
                                </span></a>
                    </div>
                      &nbsp;
                    <div>
                        <a href="lab_pay.php">
                       <!-- <div class="numbers">Safe & Secure</div>  -->
                        <div class="cardname">Payment</div>
                        </a>
                    </div>
                </div>

                        <div class="card">
    
                            <div class="iconbox">
                                <a href="report.php">
                                    <span class="material-symbols-outlined">
                                        list_alt
                                        </span></a>
                            </div>
            
                            <div>
                                <a href="report.php">
                               <div class="numbers">Analysis of</div> 
                                <div class="cardname">Reports</div>
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