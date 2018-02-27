<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="ebus_pages.css" type="text/css"/>
         <link rel="stylesheet" href="/ebusiness/ebusstyle.css" type="text/css" />
        
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
   <li><a href="homepage.html">Home</a></li>
  <li><a href="cv/page1.html">CV</a></li>
  <li><a href="interests/sports.html">Interests</a></li>
  <li><a href="/Aboutcloud.html">About Cloud</a></li>
  <li><a href="ebusiness/Ebus1.php">Products</a></li>
</ul>

        <div id="receipt">
             <h2 style="color:rgb(255, 255, 255); font-family=serif;">Here is your receipt</h2> 
         
            <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "VAT is " . $_SESSION["vat"]; ?>
            <br/>
           <?php echo "Discount is " . $_SESSION["discount"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
        </div>   
    </body>