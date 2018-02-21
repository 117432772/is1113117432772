/* global $ */

function validateDetails(){ 
    var pin;
    pin =
    document.getElementByld("user_pin").value
        if (pin==""){
            alert("Please enter your PIN");
        }
        else if (String(pin).length<4){alert("Please make sure your PIN is accurate");
        }
        else{
                enablebtnPurchase();
            }
        }

function enablebtnPurchase(){$
('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){$
('#btnPurchase').prop('disabled',true);
}