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

  <link rel="stylesheet" href="/mystylesheet.css" type="text/css" />
<h1 style="background-color: rgb(245, 189, 203);; /*Light Pink*/;font-size:40px;text-align:center;font-family:georgia; margin:0; padding:0">IS1113 Project</h1>
<style>
body background {
    color:rgb(222, 57, 99);
    text-align:center;
}


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
     <body>
<ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../cv/page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></li>
  <li><a href="/Aboutcloud.html">About Cloud</a></li>
  <li><a href="../ebusiness/Ebus1.php">Products</a></li>
</ul>

<h2 style="color:rgb(255, 255, 255); font-family:serif" Select the products of your choice </h2>

<br/>

     <form method ="POST" action ="Ebus2.php">
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="salesforce">
            <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro; 100
        </label>
            
            <br/>
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="aws">
            <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ &euro; 300 
        </label>
            
            <br/>
            
        <label style= "color:black;font-family:georgia;font-weight:bold;" for="gmail">
            <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ &euro; 400
        </label>
            
            <br/>
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="cloud9">
            <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ &euro; 200
        </label>
            
            <br/>
            <br/>
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="subtotal">
                Sub Total: 
            <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
        </label>
            
            <br/>
            <br/>
            
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="VAT">
                VAT: 
            <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
        </label>
            
            <br/>
            <br/>
            
        <label style="color:black;font-family:georgia;font-weight:bold;" for="discount">
                Discount: 
            <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label style="color:white;font-family:georgia;font-weight:bold;" for="total">
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
        
        <h3 style="color:white; font-family:georgia;">Thank you for shopping with us!</h3>

</body>
 <footer>
        <br   />
        <a href="https://www.ucc.ie/">
            <img src="data:image/png;base64,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"  class="img-responsive img-circle margin" style="display:inline" alt="UCC"  width="=300" height="100">
        </a>
        
    </footer>

</html>