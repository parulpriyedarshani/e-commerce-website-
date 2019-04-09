<?php
    


//this function will be used in products.php page
    
//This function will take user id and items id and will check whether there is an entry in users_products table with status ’Added to cart’.       
         
         function check_if_added_to_cart($item_id)
    {
                //connection variables
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "ecommerce";

         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         // Check connection
         if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
         }
        
         $user_id=$_SESSION['user_id'];
        $sql="select * from user_products where user_id='$user_id' and item_id='$item_id' and status='Added to cart';" ;
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>=1)
        {
            //This means the user has already added this product to the cart.
            return 1;
        }
        else
        {
            //This means the user has not added this product in cart yet.
            return 0;
        }
    }
    
    ?>