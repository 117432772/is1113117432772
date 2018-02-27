<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Select Products</title>

<!--jQuery--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>

    
</head>
<body>
  <link rel="stylesheet" href="/mystylesheet.css" type="text/css" />
<h1 style="background-color: rgb(245, 189, 203);; /*Light Pink*/;font-size:40px;text-align:center;font-family:georgia; margin:0; padding:0">IS1113 Project</h1>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(71, 78, 93);; /*Dark Blue*/;
}

li {
    display:inline;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>
</head>
 <body>
     <body style="background-color:rgb(222, 57, 99);text-align:center">
<ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../cv/page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></li>
  <li><a href="/Aboutcloud.html">About Cloud</a></li>
  <li><a href="../ebusiness/Ebus1.php">Products</a></li>
</ul>

<h4> Select a product </h4>

<br/>

     <form method ="POST" action ="Ebus2.php">
            
                
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro;100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ &euro;300 
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ &euro;400
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ &euro;200
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            
            <label for="VAT">
                VAT: 
                <input type="text" id="VAT" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="discount">
                Discount: 
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="total">
                Total: 
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
        
            <br/>
            <br/>
            
            <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       </div>
        

</body>
</html>