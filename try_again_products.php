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
        
        
        
        <div class="container">
            <center>
            <table style="margin-top:100px" class=" table-striped">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th></th>
                    
                    
                </tr>
                    
                    
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td> Rs.0</td>
                    <td><a href="success.php" class="btn btn-block btn-success" disabled >Confirm Order</a></td>
                </tr>
            </table>
            </center>
        </div>
   
        
  
        <div style="padding-top: 20px;">
              <center>
            <p >No items added yet. <a href="products.php">Go back to Shopping.</a></p>
                </center>

        </div>
        <?php
        
        include 'C:\wamp\www\ecommerce\includes\footer.php';
        ?>
    </body>

    </html>