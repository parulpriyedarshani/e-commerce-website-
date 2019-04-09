<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
    include 'check_if_added.php';
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
        
        <div class="container">
            <div style="margin-top:80px" class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>  We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/camera.jpg" alt="camera1">
                        <div class="caption">
                            
                            <h2>Canon EOS</h2>
                            <h4>Price Rs.36000</h4>
                              <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(1)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/camera2.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <h4>Price Rs.50000</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(2)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;"src="img/camera3.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Nikon TS45</h2>
                            <h4>Price Rs.75000</h4>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(3)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/camera4.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Fuji DSLR</h2>
                            <h4>Price Rs.150000</h4>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(4)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?>                                                                
                                </div>
                    </div>
                    
                </div>
               
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/watch.jpg" alt="watch">
                        <div class="caption">
                            <h2>Titan</h2>
                            <h4>Starting Price Rs.3750</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(5)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/watch2.jpg" alt="watch">
                        <div class="caption">
                            <h2>Fastrack </h2>
                            <h4>Starting Price Rs.11000</h4>
                                         <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(6)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        
                                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/watch3.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Sonata </h2>
                            <h4>Starting Price Rs.5800</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(7)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/watch4.jpg" alt="camera1">
                        <div class="caption">
                            <h2>HMT Milan</h2>
                            <h4>Starting Price Rs.10000</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(8)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/shirt.jpg" alt="shirt">
                        <div class="caption">
                            <h2>Arrow</h2>
                            <h4>Starting From Rs.25000</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(9)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/shirt2.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Louie Philip</h2>
                            <h4>Starting from Rs.3400</h4>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(10)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/shirt3.jpg" alt="camera1">
                        <div class="caption">
                            <h2>Peter England</h2>
                            <h4>Starting from Rs.5000</h4>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(11)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img style="width:150px;height:150px;" src="img/shirt4.jpg" alt="camera1">
                        <div class="caption">
                            <h2>H&W</h2>
                            <h4>Starting from Rs.50000</h4>
                         <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                } else 
                                    {       
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(12)) 
                                        { //This is same as if(check_if_added_to_cart != 0)   
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                            } else {                                     ?> 
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
                               <?php                              
                               }                       
                               }                
                               ?> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
            
   
        
       <footer>
            <div class="container">
                <center>
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
    </body>

    </html>