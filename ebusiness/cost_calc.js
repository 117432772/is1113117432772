/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
      argSubTotal = 100;
    }
    
    else if(document.getElementById('gmail').checked){
        argSubTotal = 400;
    }
    
    else if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
    }
    
    else{
        argSubTotal = 300;
    }

    display(argSubTotal);
    calcDisVATTotal(argSubTotal);
}
   
   function calcDisVATTotal(parmSubTotal){
       
       var SubTotal;
       var discountAmt;
       var VATAmt;
       var totalAmt;
       
       SubTotal = parmSubTotal;
       VATAmt = SubTotal * 0.23;
       discountAmt = (SubTotal + VATAmt) * 0.1;
       totalAmt = (SubTotal + VATAmt) - discountAmt;
       
       display(SubTotal, discountAmt, VATAmt, totalAmt);
   }

    function display(parm1, parm2, parm3, parm4){
        
        document.getElementById("subtotal").value = parm1;
        document.getElementById("discount").value = parm2;
        document.getElementById("VAT").value = parm3;
        document.getElementById("total").value = parm4;
        
        enablebtnProceed();
    }
    
    
    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }