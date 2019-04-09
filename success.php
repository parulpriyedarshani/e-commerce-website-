<?php

    require 'C:\wamp\www\ecommerce\includes\common.php';
   
    
     //if use not logged in redirect to index page
    if (!isset($_SESSION['email'])) 
    {  
    header('location: index.php'); 
    } 
    $user_id=$_SESSION['user_id'];
    $Text = urldecode($_REQUEST['id']);
    $id_list = json_decode($Text);

    
    // For all item id’s present in url, change the status to confirmed including user id in where clause. 
  
    foreach ($id_list as $value) {
    
        $sql="update user_products set status='Confirmed' where item_id='$value' and user_id='$user_id';";
        $result= mysqli_query($conn, $sql);
        
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
        
        <center> <p style="margin-top: 100px;"> Your order has been confirmed. Thank you for shopping with us. <a href="products.php" target="_blank">Click here</a> to go back to shopping. </p>
    </center>


       
       <footer>
            <div class="container">
                <center>
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
    </body>

    </html>