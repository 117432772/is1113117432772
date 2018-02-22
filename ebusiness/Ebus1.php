<!DOCTYPE html>
<html>
<head>
<title>Select Products</title>

<!--jQuery--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>

    
</head>
<body>

<h4> Select a product </h4>

<br/>

    <form method ="POST" action ="Ebus2.php">
<label for "aws"> 
<input type="radio" id="aws" name="product" checked onClick="disabledbtnProceed()"/>
AWS @$300
</label>

<br/>
<br/>

<label for "salesforce"> 
<input type = "radio" id = "salesforce" name = "product" onClick = "disabledbtnProceed()"/>
SalesForce @ $100
</label>

<br/>
<br/>

<label for="subtotal">
Sub Total
<input type = "text" id = "subtotal" value = "0.00" readonly/>
</label>

<br/>
<br/>

<label for="total">
Total
<input type = "text" id = "total" value = "0.00" readonly/>
</label>
        
        <br/>
        <br/>
        
<button type "submit" id = "btnProceed" disabled>Add to Shopping Cart </button>
</form>

<br/>
<br/>

<button onClick="calcSub()">Calculate Cost </button>

<br/>
<br/>

<a role = "button" href = "Ebus1.php"> Clear Choice </a>

</body>
</html>