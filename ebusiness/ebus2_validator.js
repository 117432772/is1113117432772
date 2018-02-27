/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;

    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    email = document.getElementById("user_email").value;
    
    if (pin==""||name==""||email==""){
        alert("Please enter your personal details");
        }
    else if (String(pin).length<4){
        alert("Something may have gone wrong,please ensure your PIN is correct and try again.");
        }
    else{
        enablebtnPurchase();
        }
        
  
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}