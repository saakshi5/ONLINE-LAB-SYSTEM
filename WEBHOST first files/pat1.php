<script>
   let pname='';
   let em='';
$.ajax({
    
   type: 'POST',
   url: 'pat.php',
   data: {pn:pname,p:ppassword},
   success:function(data){


       console.log(data);
   dataa= JSON.parse(data);
   
let pname=dataa[0].patient_name;
// <?php 
// $patname=$_COOKIE['pname'];
// ?>;
let em=dataa[0].patient_email;
// <?php 
// $email=$_COOKIE['em'];
// ?>;


$.ajax({
    
    type: 'POST',
    url: 'pay.php',
    data: {pn:pname.value,p:em.value},
    success:function(data){


        console.log(data);
  //  dataa= JSON.parse(data);
    
//  patname.value=dataa[0].patient_name;
//  patemail.value=dataa[0].patient_email;
//  address.value=dataa[0].patient_address;

//  console.log(dataa[0].patient_name);
 //console.log(patname.value);
        }
    
    })

//console.log(pname.value);
//console.log(patname.value);
       }
   
   })
   