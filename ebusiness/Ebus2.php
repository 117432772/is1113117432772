<DOCTYPE html>
    <html>
        <head>
            
            <title> Enter Details</title>
            
            <!--jQuery-->
            <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            
        </head>
         <body>
              <h4>Please enter your payment details.</h4>
              
              <br/>
              
              <form method = "POST" action = "Ebus3.php"></form>
              
              <label for="user_pin"
              placeholder="Card Pin"
              maxlength="4"
              
              <button type="Submit"
              id="btnPurchase" disabled>
                  Proceed with Purchase
              </button>
              </form> 
              <br/>
              <buttononClick="validate details()">  Validate </button>
              
              <scipt type="text/javascript"
              scr="ebus2_validator.js"></scipt>
              
         </body>
    </html>
</DOCTYPE>