<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
    
    //if user not logged in, redirect to index
    if (!isset($_SESSION['email'])) 
    {  
    header('location: index.php'); 
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
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
        </div>
      </div>
    </nav>
        
        <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        
                        <div>
                            <h5 style="color: red">The password entered is incorrect.</h5>
                        </div>
                        
                        <div class="panel-body">
                            <h4>Change Password</h4>
                            <form action="settings_script.php" method="post">
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Old Password" name="old_password" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password" name=" new_password" required = "true">
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Retype New Password" name=" retype_new_password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br>
                            </form><br/>
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