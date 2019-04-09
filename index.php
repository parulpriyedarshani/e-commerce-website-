<?php

require 'C:\wamp\www\ecommerce\includes\common.php';

//can be visited by logged out users only
if (isset($_SESSION['email'])) 
    {  
    header('location: products.php'); 
    } 
 ?>


<!DOCTYPE html>
<!--
COMMENTS
    -->
    <html>
        <head>
       <!-- The page has a title Lifestyle Store --> 
       <title>Lifestyle Store</title> 
       <!-- External css file index.css placed in the folder css is linked -->
       
       <link rel="stylesheet" href="mycss.css" type="text/css"> 
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>
        <?php
            include 'C:\wamp\www\ecommerce\includes\header.php';
         ?>
        

            
            <div id="banner_image">
                <div class="container">
                    <center>
                    <div id="banner_content">
                        <h1>We Sell Lifestyle</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now</a>
                    </center>
                    </div>
                </div>
            </div>
        
      <?php
        
        include 'C:\wamp\www\ecommerce\includes\footer.php';
        ?>
    </body>

    </html>