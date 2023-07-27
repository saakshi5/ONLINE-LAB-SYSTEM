<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <script src="system.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="pay.css">
        <title>Payment Page</title>
    </head>
    <body onload="cost();
    
    ">

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
                        <a href="profilee.php">
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
            <h2 style="left:500px;">Payment</h2>
      <div class="container-form">
        <form action="<?php $_PHP_SELF ?>" method="POST" name="form1" enctype="multipart/form-data">
        <!--  onsubmit="return false;" -->

            <div class="form-field">
                <p>Account Holder's Name:</p>
                <input type="text" placeholder="Enter name" id="accountname" required/>
            </div>

            <div class="form-field">
                <p>Bank Name:</p>
                <input type="text" placeholder="Enter bank name" id="bankname" required/>
            </div>


            <div class="form-field">
                <p>Enter Transaction Amt:</p>
                <input type="text" placeholder="Enter amount" id="transamt" required/>
            </div>

            <div class="form-field">
                <p>Enter Account No.:</p>
                <input type="text" placeholder="Enter account no." id="accountno" required/>
            </div>

            
            <div class="form-field">
                <p>Branch Name:</p>
                <input type="text" placeholder="Enter branch name" id="branchname" required/>
            </div>

            <!-- <div class="form-field">
                <p>Address</p>
               <textarea id="address" name="address" rows="4" cols="40" required></textarea>
            </div> -->

            <div class="form-field">
                <p>Enter transaction Date:</p>
                <input type="date" id="transdate" required/>
            </div>
            <div class="form-field">
                <p>Upload Receipt:[max file size=2MB]
                </p>
                <input type="file" name="upload" id="file-input"/>
   <!-- //onchange="handleFileSelect(event)" -->
            </div>
            
            <!-- <div class="form-field">
                <p>Appointment Time</p>&nbsp;&nbsp;
            </div><div>
                <input type="radio" id="t1" value="t1" name="time" required>
                <label>7am-9am</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="t2" value="t2" name="time" required>
                <label>9am-11am</label>
            </div> -->
            <div>
                <!-- <button class="btn">Book</button>&nbsp; -->
                <!-- <a href="#">
                    </a>
               --> 
               <p id="file-result"></p>
               <input type="submit" name="submit" value="submit" class="btn" id="file-submit" onclick="ppaydetails();" required/>    
                <!-- // onclick="change(); ppaydetails();" -->

             </div> 

<!-- <b id="res"></b> -->
<?php
$fname = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];
$folder="pics/".$fname;
echo $folder;
move_uploaded_file($tempname, $folder);
?> 
        </form>
      </div>



    </div>  
<p id="em"></p>
<b id="pname"></p>

    </body>
    <!-- $folder=''; -->




</html>




<script>
    function cost(){
        let c=document.getElementById("transamt");
        c.value="<?php echo $_SESSION['cost'] ?>";
    }
//var folder='';
// const uploadFile = (file) => {
//   const fname = file.name;
//    folder = "pics/" + fname;

//   console.log('folder',folder); // Display the folder path

//   const reader = new FileReader();
//   reader.onload = function (e) {
//     const tempname = e.target.result;
//     // // Send the file data to the server using AJAX or fetch API
//     // const formData = new FormData();
//     // formData.append("upload", file, fname);

//     // fetch("upload.php", {
//     //   method: "POST",
//     //   body: formData,
//     // })
//     //   .then((response) => {
//     //     if (response.ok) {
//     //       console.log("File uploaded successfully.");
//     //     } else {
//     //       console.log("Error uploading file.");
//     //     }
//     //   })
//     //   .catch((error) => {
//     //     console.error("An error occurred:", error);
//     //   });
//   };

// //   reader.readAsDataURL(file);
// };

// // // Example usage
// const fileInputt = document.getElementById("file-input");
// fileInputt.addEventListener("change", (e) => {
//   const file = e.target.files[0];
//   uploadFile(file);
// //   moveFile(file,pics/);

// });

// var filename='';
// function handleFileSelect(event) {
//     var files = event.target.files;
//   filename = files[0].name;
//     console.log(filename);
//     // Perform further processing with the filename
//     // ...
//   }

     let fileSubmit=document.getElementById("file-submit");

    let fileInput=document.getElementById("file-input");
    let fileResult=document.getElementById("file-result");

fileInput.addEventListener("change", function () {
  if (fileInput.files.length > 0) {
    const fileSize = fileInput.files.item(0).size;
    const fileMb = fileSize / 1024 ** 2;
    if (fileMb >= 2) {
      fileResult.innerHTML = "Please select a file less than 2MB.";
      fileSubmit.disabled = true;
    } else {
      fileResult.innerHTML = "File selected";
      fileSubmit.disabled = false;

    }
  }
});

// var f=document.getElementById("res");
// f.innerHTML=fn;
   // console.log(f);


function ppaydetails(){
   

    
let pname=document.createElement('p');
pname.setAttribute('id', 'pname');
let em=document.createElement('p');
em.setAttribute('id', 'em');
// pname='rahul';
// em='rahul@gmail.com';
//function info(){

console.log('info');
$.ajax({
    
   type: 'POST',
   url: 'pat.php',
   data: 'hii',
   success:function(data){


       console.log(data);
   dataa= JSON.parse(data);
   
 pname=dataa[0].patient_name;
em=dataa[0].patient_email;

console.log(pname);
var f;
var fn="<?php echo $folder ?>";
f=fn;

let acname=document.getElementById("accountname");
    let bankname=document.getElementById("bankname");
    let transamt=document.getElementById("transamt");
    let acnum=document.getElementById("accountno");
    let branchname=document.getElementById("branchname");
    let transdate=document.getElementById("transdate");
    // let sub=document.getElementById("file-submit");

    // let img=document.getElementById("file-input");
  // console.log(f.innerText);
    console.log('patient payment');
    console.log('f=',f);
    // console.log(img.innerHTML);
        $.ajax({

type: 'POST',
url: 'pay.php',
data: {pn:pname,p:em,f:f,acn:acname.value,bn:bankname.value,br:branchname.value,amt:transamt.value,accnum:acnum.value,date:transdate.value},
success:function(data){
 console.log(data);
    if(data=='S'){
        alert('Data stored Successfully');
     }
    //  else if(data=='NS'){
    //     alert('Data not stored Successfully');
    // }
    //  else{
    //     alert('Some issue');
    //  }
    
    }
})

   }

})


  
//}



//     const uploadFile = (file) => {
//   const fname = file.name;
//    folder = "pics/" + fname;

//   console.log('folder',folder); // Display the folder path

//   const reader = new FileReader();
//   reader.onload = function (e) {
//     const tempname = e.target.result;

//     // // Send the file data to the server using AJAX or fetch API
//     // const formData = new FormData();
//     // formData.append("upload", file, fname);

//     // fetch("upload.php", {
//     //   method: "POST",
//     //   body: formData,
//     // })
//     //   .then((response) => {
//     //     if (response.ok) {
//     //       console.log("File uploaded successfully.");
//     //     } else {
//     //       console.log("Error uploading file.");
//     //     }
//     //   })
//     //   .catch((error) => {
//     //     console.error("An error occurred:", error);
//     //   });
//   };

// //   reader.readAsDataURL(file);
// };

// Example usage
// const fileInputt = document.getElementById("file-input");
// fileInputt.addEventListener("change", (e) => {
//   const file = e.target.files[0];
//   uploadFile(file);
// });


// var filename='';
// function handleFileSelect(event) {
//     var files = event.target.files;
//   filename = files[0].name;
//     console.log(filename);
//     // Perform further processing with the filename
//     // ...
//   }

  

}
// let pname=document.getElementById('pname');
// let em=document.getElementById('em');

// $.ajax({
    
//    type: 'POST',
//     url: 'pay.php',
//     data: {pn:pname.value,p:em.value},
//     success:function(data){


//         console.log(data);
//   //  dataa= JSON.parse(data);
//   }

//  })


</script>

