<?php 
    require 'C:\wamp\www\ecommerce\includes\common.php';
   $user_id=$_SESSION['user_id'];
   //in products.php the href link was hard coded to provide the id in the url so that we could fetch it using get function
   
   $item_id=$_GET['id'];
   
   
  //Write the insert query to add items id (from url) and user id from the session and status would be Added to cart. 
   $sql="INSERT INTO user_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart'); ";
  
   $result= mysqli_query($conn, $sql);
   
   // use header function to redirect the user to products.php page
        if($result)
        {
      
        header('location: products.php');}
    ?>
