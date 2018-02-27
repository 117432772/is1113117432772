<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Payment Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
     <body style="background-color:rgb(222, 57, 99);text-align:center;font-family:georgia;color:white">
<ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="cv/page1.html">CV</a></li>
  <li><a href="interests/sports.html">Interests</a></li>
  <li><a href="/Aboutcloud.html">About Cloud</a></li>
  <li><a href="ebusiness/Ebus1.php">Products</a></li>
</ul>
   
          <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4" required>
                <br/>
                <br/>
                <label for="user_name">
                    Name:
                </label>
                    
                <input type="text" id="user_name" placeholder="Name" required>
                <br/>
                <br/>
                <label for="user_email">
                    Email:
                </label>
                
                <input type="text" id="user_email" placeholder="email" required>
                <br/>
                <br/> 
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["VAT"] = $_POST["VAT"];
        $_SESSION["discount"] = $_POST["discount"];
        $_SESSION["total"] = $_POST["total"];
        ?>
    </div>    
    </body>
    
</html>