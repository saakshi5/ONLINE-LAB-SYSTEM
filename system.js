
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