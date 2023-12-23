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
        <script src="system.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>Tests</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="test.css">
    </head>
    <body onload="generatetest();">

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

        <div class="main">
            <h2 style="left:500px;">Tests Available</h2>
            <div class="search"><lable>
                <input type="text" placeholder="Search here" id="search">
                <div class="butt" id="butt"><button class="btn-1">Go</button></div>
                <div class="iconn">
               <span class="material-symbols-outlined">search</span>   </div>
            
            </lable>
            </div>
            <div id="ttable">
                    <div class="table-box">
                 <div class="table-row table-head">
                    <div class="table-cell last-cell">
                        <p>Test Name</p>
                    </div>
               
                    <div class="table-cell">
                        <p>Test Cost</p>
                    </div>

                    <div class="table-cell">
                        <p>Test Pre-requisites</p>
                    </div>
                </div>
<div id="testtable">
    <p id="tp"></p>

</div>
<div id="testsearch"></div>
        </div>
             <!-- <a href="bookk.php">  -->
            <button class="btnn" id="submit">Book</button>
        <!-- </a>  -->
    </div>  

    <div class="modal" id="modal3">
        <div class="modal-header">
         <div class="tittle">Tests Pre-Requirements</div>
         <button class="close" id="closse" onclick="closee();" ><span class="material-symbols-outlined">
            cancel
            </span></button>
        </div>  
        <div class="modal-body">
            <!-- <p>HJFHKbdfj</p> -->
            <form>
                <div class="form-field">
                    <!-- <p>Status:</p>
                    <input type="text" placeholder=""  id="st" /> -->
                    <textarea cols="67" rows="8" id="tre"></textarea>
                </div>
              
                <!-- <div>
                    <a href="#">
                    <button class="edit" onclick="editbutton();">Save Changes</button></a></div> -->
            </form>
        </div>
     </div>
     <div id="overlay"></div>
    </body>
</html>




<script>
    let searchb=document.getElementById("butt");
    searchb.addEventListener('click',e=>search(e));

let tre=document.getElementById('tre');
// let b=document.getElementById('butt');
// //console.log(subbtn);
// b.addEventListener('click',e=>search(e));

// function book(){
//     window.location='bookk.php';
// }

// var submitButton = document.getElementById('submit');
//   submitButton.addEventListener('click', function() {
//       // Get all the checkboxes
//       var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
      
//       // Array to store the selected values
//       var selectedValues = [];

//       // Iterate over the checkboxes and retrieve their values
//       checkboxes.forEach(function(checkbox) {
//         selectedValues.push(checkbox.value);
//       });

//       // Log the selected values
//       console.log(selectedValues);


//       // You can send the selected values to the server or perform any desired action here
//     });


    // const openbutton =document.getElementById('btnn');
    // const closebutton =document.getElementById('closse');
    function opennn(e){
        console.log('hiii');
    const modal =document.getElementById('modal3');
    const overlay =document.getElementById('overlay');
    modal.style.display = 'block';
    overlay.style.display = 'block';
    modal.style.transform= 'translate(-50%,-50%) scale(1)';
    // modal.style.transform= 'translate scale(1)';
    //   modal.add();
    //   overlay.add();
 
    }


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
    const modal =document.getElementById('modal3');
    // const delmodal =document.getElementById('delmodall');
    // const addmodal =document.getElementById('addmodall');
const overlay =document.getElementById('overlay');
modal.style.display = 'none';
// delmodal.style.display = 'none';
// addmodal.style.display='none';
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
   
    
    function prefetch(e,data){
 //console.log(data);
prename=e.target.parentNode.parentNode.parentNode.childNodes[0].innerText;
console.log(prename);

// console.log("data",data[0].test_id);

for(let i=0; i<data.length; i++){


    
         //console.log("data",data[i].test_name);
        if(data[i].test_name==prename){
            console.log("prerq",data[i].prereq);
            tre.defaultValue=dataa[i].prereq;
        }
}

}
        function generatetest(){

            let ppid=0;


            $.ajax({
    
    type: 'POST',
    url: 'admin_test.php',
    data: {x:'Tests'},
    success:function(data){
        // console.log(data);
        dataa= JSON.parse(data);
        console.log(dataa[0].test_name);
    

    let p=document.createElement('p');
    p.setAttribute('id', 'tp');

     if(data =='NE'){
     alert('Not exists');
     }
     else {
    
    
    for(let i=0; i<dataa.length;i++) {
  
        var label = document.createElement("label");

     let tr=document.createElement('div');
    tr.classList.add('table-row');  
    
    let tcell1=document.createElement('div');
     tcell1.classList.add('table-cell','first-cell');

     ppid=ppid +1;
     let s='trow'+ppid.toString();
    tr.setAttribute('id',s);


     let tcell2=document.createElement('div');
     tcell2.classList.add('table-cell');

    
     let checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.name = "checkboxOption";
    //checkbox.value = checkboxValues[i];



    let tcell3=document.createElement('div');
     tcell3.classList.add('table-cell','last-cell');

     let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');

    // let btn3= document.createElement('button');  //edit button
    // btn3.classList.add('btn-2');
    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');
    spann.innerHTML='Pre-requisites';
    btn1.addEventListener('click',e=>prefetch(e,dataa));

    //rows and cols
     let tbox1=document.getElementById('testtable');
    tbox1.appendChild(tr);


    let n=dataa[i].test_name;

    tr.appendChild(tcell1);
 // tcell1.appendChild(p);
  tcell1.append(checkbox,n);
// checkbox.append(label);  

    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].test_cost;
   

    tr.appendChild(tcell3);
    tcell3.appendChild(btn1);
    btn1.appendChild(spann);

    
    // btn1.addEventListener('click',e=>openn(e));
    // btn2.addEventListener('click',e=>deleteb(e));
btn1.addEventListener('click',e=>opennn(e));
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
    const tt =document.getElementById('testtable');
    const ts =document.getElementById('testsearch');
    tt.style.display = 'none';
    ts.style.display = 'block';
    //ts.style.transform= 'translate(-50%,-50%) scale(1)';

    console.log(ts.parentNode);

            $.ajax({
    
    type: 'POST',
    url: 'testsearch.php',
   data: {tn:n},
    success:function(data){

        dataa=JSON.parse(data);
        // console.log(dataa[0].test_name);
        console.log(dataa.length);
        if(data=="NE"){
     alert('Not exists');
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
        
        let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');


    let spann= document.createElement('spann');  //delete button
    //span.classList.add('material-symbols-outlined');

    spann.innerHTML='Pre-requisites';

    btn1.addEventListener('click',e=>prefetch(e,dataa));
    var label = document.createElement("label");

     let tr=document.createElement('div');
    tr.classList.add('table-row');  
    
    let tcell1=document.createElement('div');
     tcell1.classList.add('table-cell','first-cell');

     ppid=ppid +1;
    let s='trrow'+ppid.toString();
    tr.setAttribute('id',s);
  
     let tcell2=document.createElement('div');
     tcell2.classList.add('table-cell','last-cell');

     let tcell3=document.createElement('div');
     tcell3.classList.add('table-cell','last-cell');
     
     let checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.name = "checkboxOption";
    //checkbox.value = checkboxValues[i];

    //rows and cols
    //  let tbox1=document.getElementById('#testsearch');
    // tbox1.appendchild(tr);
    //changes keep this only
    // tbox.appendChild(tr);
ts.appendChild(tr);

    let n=dataa[i].test_name;

    tr.appendChild(tcell1);
  tcell1.append(checkbox,n);

    tr.appendChild(tcell2);
    tcell2.innerText=dataa[i].test_cost;

    tr.appendChild(tcell3);
    tcell3.appendChild(btn1);
    btn1.appendChild(spann);

    btn1.addEventListener('click',e=>opennn(e));
     }
  
    }

}
    });
    

        }

        let subbtn=document.getElementById('submit');
        subbtn.addEventListener('click',e=>selecting(e));
        //subbtn.addEventListener('click',e=>book(e));
//console.log(subbtn);
// function book(e){

//     let tablebox=e.target.parentNode.childNodes;
//    // console.log(tablebox);
//     for(let z=7; z <tablebox.length;z++) {
//     let checkboxx=e.target.parentNode.childNodes[1].childNodes[3].childNodes[z].childNodes[0].childNodes[0];
//     console.log(checkboxx)
//     }
// if (checkboxx.checked){
//     subbtn.addEventListener('click',e=>selecting(e));
// }
// else{
//     alert("Select test");
// }
// }


function selecting(e){
            
    const tt =document.getElementById('testtable');
    const ts =document.getElementById('testsearch');


            //serach table
          let table=e.target.parentNode.childNodes[1].childNodes[5].childNodes;
        //console.log("tablee",table); //0 to table.length  for loop condition



          let tablebox=e.target.parentNode.childNodes[1].childNodes[3].childNodes;
          //console.log(tablebox);
          let tname=[];
          let cost=[];
        //  console.log(tablebox);
            //7 to 25 range
        
       // console.log(e.target.parentNode.childNodes[1].childNodes[3].childNodes[7].childNodes[0].childNodes[1]);//test name
          //  console.log(e.target.parentNode.childNodes[1].childNodes[3].childNodes[7].childNodes[1].childNodes[0]);//test cost
 
//         console.log(e.target.parentNode.childNodes[1].childNodes[3].childNodes);
//           let c=e.target.parentNode.childNodes[1].childNodes[3].childNodes[15].childNodes[0].childNodes[0];
//   if(c.checked){
//     console.log(c);
//   }

//console.log('hello');
            for(let z=3; z <tablebox.length;z++) {
 let chbox=e.target.parentNode.childNodes[1].childNodes[3].childNodes[z].childNodes[0].childNodes[0];
           if (chbox.checked){
            console.log('checked');
            let testname=e.target.parentNode.childNodes[1].childNodes[3].childNodes[z].childNodes[0].childNodes[1];
            tname.push(testname.data);
        console.log(testname);

            let testcost=e.target.parentNode.childNodes[1].childNodes[3].childNodes[z].childNodes[1].childNodes[0];
            cost.push(testcost.data);
          console.log(testcost);
          
           }
           else{
            console.log('unchecked');
           }
            }


console.log("2nd loop stsrts");
            for(let z=0; z <table.length;z++) {
 let chbox=e.target.parentNode.childNodes[1].childNodes[5].childNodes[z].childNodes[0].childNodes[0];
//let chbox=e.target.parentNode.childNodes[z].childNodes;
 //console.log("phaltu");
 //console.log(chbox);
           if (chbox.checked){
            //console.log('checked');
            let testname=e.target.parentNode.childNodes[1].childNodes[5].childNodes[z].childNodes[0].childNodes[1];
            console.log(testname);
            //if tname.find(testname)

            

// Input array contain some elements.
//let array = [-10, -0.20, 0.30, -40, -50];
 
 // Method (return element > 0).
    var found = tname.find(function (element) {
        return element == testname.data;
    });
    console.log(found, testname);
    if (found != testname.data){
        console.log("iffffff");
        tname.push(testname.data);
        let testcost=e.target.parentNode.childNodes[1].childNodes[5].childNodes[z].childNodes[1].childNodes[0];
        cost.push(testcost.data);
        console.log(testcost); 
            
    }
    else{
        console.log(found);
    }
 //console.log(found);
            //tname.push(testname.data);
        // console.log(testname);
           }

           else{
            console.log('unchecked');
           }

            }



          // console.log(tname);
         //console.log(cost);
     // let ntest=tname.join();
      //console.log(ntest);
          //cost.toString()
        // console.log(tname.toString(),cost.toString());

  //  let num=99;      
 $.ajax({
    
    type: 'POST',
    url: 'testdetails.php',
   data: {tn:tname,c:cost},
   //data:JSON.stringify({tn:tname,c:cost}),
   //data:{tn:'hello',c:'world'},
    success:function(data){


        console.log(data);
    //dataa= JSON.parse(data);
    
 window.location='bookk.php';
 //console.log(patname.value);
        }
    
    });
    

        }
    </script>
    