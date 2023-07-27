
function clickk(){
    console.log("clicked");
    let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.navbar');

menu.onclick =() =>{
    let navbar=document.querySelector('.navbar');
    if(navbar.style.display != 'none')
    {
        navbar.style.display='none';
    }
    else
    {
        navbar.style.display='block';
    }
    console.log("hello");
    // menu.classList.toggle('fa-times');
    // navbar.classList.toggle('active');
    
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
   }
}

// let card = document.querySelector('.card');
// card.addEventListener("mouseover",changebgcolor);
// function changebgcolor(){
//   card.style.background = 'blue';
// };




// function click(){
//     console.log('clicked');
// // }
// let menu=document.querySelector('#menu-btn');
// let navbar=document.querySelector('.navbar');

// menu.onclick =() =>{
   
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active');
    
// }

// window.onscroll = () =>{
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');
// }


//PROFILE
// const openbutton =document.getElementById('btn');
// const closebutton =document.getElementById('close');
// const modal =document.getElementById('modal');
// const overlay =document.getElementById('overlay');
// function open(){
//       modal.classList.add('active');
//       overlay.classList.add('active');
// }

// function close(){
//     modal.classList.remove('active');
//     overlay.classList.remove('active');
// }


const openbutton =document.getElementById('btnn');
const closebutton =document.getElementById('closse');

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
const overlay =document.getElementById('overlay');
modal.style.display = 'none';
delmodal.style.display = 'none';

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

function deletebutton(){
    // let delb=document.getElementById('deletebutton');
    window.alert('Deleted Successfully');

}

function editbutton(){
    // let delb=document.getElementById('deletebutton');
    window.alert('Edited Successfully');

}

function createpatientdata(){
    console.log('Creating patient data');

    let tr=document.createElement('div');
    tr.classList.add('table-row');

   
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'adpb');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');    
    
    

    //creating each table cell
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


    // //each cell paragraph
    // let tcellpid=document.createElement('p');
    // tcellpid.setAttribute('id','adpid');
    // // tcellpid.innerText='655433';

    // let tcellpn=document.createElement('p');
    // tcellpn.setAttribute('id','adpname');

    // let tcellpe=document.createElement('p');
    // tcellpe.setAttribute('id','adpemail');

    // let tcellps=document.createElement('p');
    // tcellps.setAttribute('id','adpstatus');

    // let tcellpb=document.createElement('p');
    // tcellpb.setAttribute('id','adpbutton');
    
//adding row and cells to table
    let tbox=document.getElementById('table-boxx');
    tbox.appendChild(tr);
    tr.appendChild(tcell1);
    // tcell1.appendChild(tcellpid);

    tr.appendChild(tcell2);
    // tcell2.appendChild(tcellpn);

    tr.appendChild(tcell3);
    // tcell3.appendChild(tcellpe);

    tr.appendChild(tcell4);
    // tcell4.appendChild(tcellps);

    tr.appendChild(tcell5);
    tcell5.appendChild(p);
    p.appendChild(btn1);
    btn1.appendChild(span);
    p.appendChild(btn2);
    btn2.appendChild(span2);
    
    btn1.addEventListener('click',openn);
    btn2.addEventListener('click',deleteb);
}


function createstaffdata(){

    let staffdetails= document.getElementById('stafftbox');
    // if(staffdetails.style.display=='none'){
    staffdetails.style.display='block';
    // }
    console.log(staffdetails);


let patientdetails= document.getElementById('patienttbox');
// if(patientdetails.style.display !='none')
// {
    patientdetails.style.display='none';
// }





    
let span= document.createElement('span');  //delete button
span.classList.add('material-symbols-outlined');
span.innerHTML='edit';

let span2= document.createElement('span');  //delete button
span2.classList.add('material-symbols-outlined');
span2.innerHTML='delete';


let p=document.createElement('p');  //paragraph
p.setAttribute('id', 'adsbutton');


//create button
let btn1= document.createElement('button');  //edit button
btn1.classList.add('btn-2');

let btn2= document.createElement('button');  //delete button
btn2.classList.add('btn-3');



//selecting element
    let tr=document.createElement('div');
    tr.classList.add('table-row');


     //creating each table cell
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
 

    //  //each cell paragraph
    // let tcellsid =document.createElement('p');
    // tcellsid.setAttribute('id','adsid');


    // let tcellsn=document.createElement('p');
    // tcellsn.setAttribute('id','adsname');
    // tcellsn.innerText='akshata';

    // let tcellse=document.createElement('p');
    // tcellse.setAttribute('id','adsemail');

    // let tcellss=document.createElement('p');
    // tcellss.setAttribute('id','adsstatus');

    // let tcellsb=document.createElement('p');
    // tcellsb.setAttribute('id','adsbutton');


    
//adding row and cells to table
let tbox1=document.getElementById('stafftable-boxx');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellsid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellsn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellse);

tr.appendChild(tcell4);
// tcell4.appendChild(tcellss);

tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);
}


function createpatienttestdata(){
 //selecting element
let ptestdetails= document.getElementById('patienttestbox');
    ptestdetails.style.display='block';

//selecting class
    let tr=document.createElement('div');
    tr.classList.add('table-row');


    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'pbutton');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');    
    

    let tcell1=document.createElement('div');
     tcell1.classList.add('table-cell','first-cell');
 
     let tcell2=document.createElement('div');
     tcell2.classList.add('table-cell');
 
     let tcell3=document.createElement('div');
     tcell3.classList.add('table-cell');
 
     let tcell4=document.createElement('div');
     tcell4.classList.add('table-cell','last-cell');


//each cell paragraph
    //  let tcellptid =document.createElement('p');
    // tcellptid.setAttribute('id','adptid');


    // let tcellptn=document.createElement('p');
    // tcellptn.setAttribute('id','adptn');
    // tcellptn.innerText='om';

    // let tcellptcost=document.createElement('p');
    // tcellptcost.setAttribute('id','adptcost');

    // let tcellptb=document.createElement('p');
    // tcellptb.setAttribute('id','adptb');

       
//adding row and cells to table
let tbox1=document.getElementById('adptest');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellptid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellptn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellptcost);

tr.appendChild(tcell4);
tcell4.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);

}
    
function createpatient(){
 //selecting element
 let patientdetails= document.getElementById('patientbox');
 patientdetails.style.display='block';

//selecting class

let tr=document.createElement('div');
tr.classList.add('table-row');


let span= document.createElement('span');  //delete button
span.classList.add('material-symbols-outlined');
span.innerHTML='edit';

let span2= document.createElement('span');  //delete button
span2.classList.add('material-symbols-outlined');
span2.innerHTML='delete';


let p=document.createElement('p');  //paragraph
p.setAttribute('id', 'pbutton');


//create button
let btn1= document.createElement('button');  //edit button
btn1.classList.add('btn-2');

let btn2= document.createElement('button');  //delete button
btn2.classList.add('btn-3');    


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


//creating cell for each paragraph i.e element
// let tcellpid =document.createElement('p');
// tcellpid.setAttribute('id','pid');


// let tcellpn=document.createElement('p');
// tcellpn.setAttribute('id','pn');
// tcellpn.innerText='omkar';

// let tcellpemail=document.createElement('p');
// tcellpemail.setAttribute('id','pemail');

// let tcellpadd=document.createElement('p');
// tcellpadd.setAttribute('id','paddress');


// let tcellpb=document.createElement('p');
// tcellpb.setAttribute('id','pbutton');

   
//adding row and cells to table
let tbox1=document.getElementById('onlypatientbox');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellpid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellpn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellpemail);

tr.appendChild(tcell4);
// tcell4.appendChild(tcellpadd);

tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);


}

//appointments
function createappointment(){

    let appointdetails= document.getElementById('adappointbox');
 appointdetails.style.display='block';

 
//selecting class

let tr=document.createElement('div');
tr.classList.add('table-row');




let span= document.createElement('span');  //delete button
span.classList.add('material-symbols-outlined');
span.innerHTML='edit';

let span2= document.createElement('span');  //delete button
span2.classList.add('material-symbols-outlined');
span2.innerHTML='delete';


let p=document.createElement('p');  //paragraph
p.setAttribute('id', 'pbutton');


//create button
let btn1= document.createElement('button');  //edit button
btn1.classList.add('btn-2');

let btn2= document.createElement('button');  //delete button
btn2.classList.add('btn-3');    


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

 
//each cell paragraph i.e element
// let tcelladappointid =document.createElement('p');
// tcelladappointid.setAttribute('id','adappid');


// let tcelladappointn=document.createElement('p');
// tcelladappointn.setAttribute('id','adappn');
// tcelladappointn.innerText='omkar';

// let tcelladappointtestn=document.createElement('p');
// tcelladappointtestn.setAttribute('id','adapptestn');

// let tcelladappointdate=document.createElement('p');
// tcelladappointdate.setAttribute('id','adappd');

// let tcelladappointpay=document.createElement('p');
// tcelladappointpay.setAttribute('id','adappay');

// let tcelladappointb=document.createElement('p');
// tcelladappointb.setAttribute('id','adappb');


   
//adding row and cells to table
let tbox1=document.getElementById('adappointbox');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcelladappointid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcelladappointn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcelladappointtestn);

tr.appendChild(tcell4);
// tcell4.appendChild(tcelladappointdate);

tr.appendChild(tcell5);
// tcell5.appendChild(tcelladappointpay);

tr.appendChild(tcell6);
tcell6.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);;
btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);

}

//sample
function createsample(){

    let sampledetails= document.getElementById('samplebox');
    sampledetails.style.display='block';
   
    


let span= document.createElement('span');  //delete button
span.classList.add('material-symbols-outlined');
span.innerHTML='edit';

let span2= document.createElement('span');  //delete button
span2.classList.add('material-symbols-outlined');
span2.innerHTML='delete';


let p=document.createElement('p');  //paragraph
p.setAttribute('id', 'sampleb');


//create button
let btn1= document.createElement('button');  //edit button
btn1.classList.add('btn-2');

let btn2= document.createElement('button');  //delete button
btn2.classList.add('btn-3');    

 
//selecting class

let tr=document.createElement('div');
tr.classList.add('table-row');  //class already exits just creating 1 more element like that

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


//each cell paragraph i.e element
// let tcellsid =document.createElement('p');
// tcellsid.setAttribute('id','sampleid');


// let tcellsn=document.createElement('p');
// tcellsn.setAttribute('id','samplen');
// tcellsn.innerText='omkar';

// let tcellstestn=document.createElement('p');
// tcellstestn.setAttribute('id','sampletestn');


// let tcellsstatus=document.createElement('p');
// tcellsstatus.setAttribute('id','samplestatus');

// let tcellsdate=document.createElement('p');
// tcellsdate.setAttribute('id','sampledate');


// let tcellsb=document.createElement('p');
// tcellsb.setAttribute('id','sampleb');


   
//adding row and cells to table
let tbox1=document.getElementById('sampletbox');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellsid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellsn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellstestn);

tr.appendChild(tcell4);
// tcell4.appendChild(tcellsstatus);


tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);


}

//reports
function createreport(){

    
    let reportdetails= document.getElementById('reportbox');
    reportdetails.style.display='block';

   
    
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
    


//selecting class

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



//creating cell for each paragraph i.e element
// let tcellrpid =document.createElement('p');
// tcellrpid.setAttribute('id','rpid');


// let tcellrpn=document.createElement('p');
// tcellrpn.setAttribute('id','rpn');
// tcellrpn.innerText='soham';

// let tcellrtestn=document.createElement('p');
// tcellrtestn.setAttribute('id','rtestn');

// let tcellrtstatus=document.createElement('p');
// tcellrtstatus.setAttribute('id','rtstatus');


// let tcellrtb=document.createElement('p');
// tcellrtb.setAttribute('id','rtb');

  
//adding row and cells to table
let tbox1=document.getElementById('reporttbox');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellrpid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellrpn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellrtestn);

tr.appendChild(tcell4);
// tcell4.appendChild(tcellrtstatus);

tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);

}

function createstaff(){

  
    let staffdata= document.getElementById('onlystaffbox');
    staffdata.style.display='block';

    
    
    let span= document.createElement('span');  //delete button
    span.classList.add('material-symbols-outlined');
    span.innerHTML='edit';
    
    let span2= document.createElement('span');  //delete button
    span2.classList.add('material-symbols-outlined');
    span2.innerHTML='delete';
    
    
    let p=document.createElement('p');  //paragraph
    p.setAttribute('id', 'staffb');
    
    
    //create button
    let btn1= document.createElement('button');  //edit button
    btn1.classList.add('btn-2');
    
    let btn2= document.createElement('button');  //delete button
    btn2.classList.add('btn-3');
   
//selecting class

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

 

// //creating cell for each paragraph i.e element
// let tcellstaffid =document.createElement('p');
// tcellstaffid.setAttribute('id','staffid');


// let tcellstaffn=document.createElement('p');
// tcellstaffn.setAttribute('id','staffn');
// // tcellrpn.innerText='soham';

// let tcellstaffemail=document.createElement('p');
// tcellstaffemail.setAttribute('id','staffe');

// let tcellstaffrole=document.createElement('p');
// tcellstaffrole.setAttribute('id','staffrole');


// let tcellstaffb=document.createElement('p');
// tcellstaffb.setAttribute('id','staffb');

   
//adding row and cells to table
let tbox1=document.getElementById('onlystafftbox');
tbox1.appendChild(tr);
tr.appendChild(tcell1);
// tcell1.appendChild(tcellstaffid);

tr.appendChild(tcell2);
// tcell2.appendChild(tcellstaffn);

tr.appendChild(tcell3);
// tcell3.appendChild(tcellstaffemail);

tr.appendChild(tcell4);
// tcell4.appendChild(tcellstaffrole);

tr.appendChild(tcell5);
tcell5.appendChild(p);
p.appendChild(btn1);
btn1.appendChild(span);
p.appendChild(btn2);
btn2.appendChild(span2);

btn1.addEventListener('click',openn);
btn2.addEventListener('click',deleteb);


}

//payment
function change(){
    console.log("hiiiiiii");
let fileinput =document.getElementById('file-input');
let fileresult = document.getElementById('file-result');
let filesubmit = document.getElementById('file-submit');

let amt=document.getElementById('transamt');
let bank = document.getElementById('bankname');
let branch = document.getElementById('branchname');
let acname = document.getElementById('accountname');
let accountno = document.getElementById('accountno');
let transdate = document.getElementById('transdate');

if( amt.value=="")
{
    alert('Please fill amount');
}
else if(bank.value=="")
{
    alert('Please fill bank name.');
}
else if(branch.value=="")
{
    alert('Please fill branch name.');
}
else if(accountno.value=="")
{
    alert('Please fill account number.');
}
else if(transdate.value=="")
{
    alert('Please fill transaction date.');
}
else if(acname.value=="")
{
    alert('Please fill account holder name.');
}
else if(fileinput.value=="")
{
    alert('Please upload payment receipt.');
}
   else if(fileinput.files.length >0){
        const filesize = fileinput.files.item(0).size;
        const filemb = filesize / 1024 ** 2;
        
        if(filemb <=2){
            //  filesubmit.disabled=false;
            fileresult.innerHTML ='Success, your file is uploaded.';
            filesubmit.disabled =false;
            if(filesubmit.disabled ==false){
                filesubmit.disabled =true;
                }
        }

        if(filemb >=2){
            fileresult.innerHTML ='Please select a file less then 2MB';
            // filesubmit.disabled =true;

            //   if(filesubmit.disabled==true){
            // filesubmit.disabled =false;
            // }
        
            // filesubmit.disabled =false;

        }
      
    }

}


//staff patient payemnt

function createpatientpaydata(){
    console.log('staff patient payment data');

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
    p.setAttribute('id', 'sppayb');

    let tr=document.createElement('div');
    tr.classList.add('table-row');


    //creating each table cell
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


    // //each cell paragraph
    // let tcellpid=document.createElement('p');
    // tcellpid.setAttribute('id','sppayid');
    // // tcellpid.innerText='3';

    // let tcellpn=document.createElement('p');
    // tcellpn.setAttribute('id','sppayn');

    // let tcellpe=document.createElement('p');
    // tcellpe.setAttribute('id','sppayemail');

    // let tcellps=document.createElement('p');
    // tcellps.setAttribute('id','sppaystatus');

    // let tcellpb=document.createElement('p');
    // tcellpb.setAttribute('id','sppayb');
    
//adding row and cells to table
    let tbox=document.getElementById('paytable-boxx');
    tbox.appendChild(tr);
    tr.appendChild(tcell1);
    // tcell1.appendChild(tcellpid);

    tr.appendChild(tcell2);
    // tcell2.appendChild(tcellpn);

    tr.appendChild(tcell3);
    // tcell3.appendChild(tcellpe);

    tr.appendChild(tcell4);
    // tcell4.appendChild(tcellps);

    tr.appendChild(tcell5);
    tcell5.appendChild(p);
    p.appendChild(btn1);
    btn1.appendChild(span);
    p.appendChild(btn2);
    btn2.appendChild(span2);
    
    btn1.addEventListener('click',openn);
    btn2.addEventListener('click',deleteb);
    
}
