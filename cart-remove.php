<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
    
    
    
    
 
    //if user not logged in redirect to index page
    if (!isset($_SESSION['email'])) 
    {  
    header('location: index.php'); 
    } 
    
    //fetch the user id from session and item_id from the url
    $user_id=$_SESSION['user_id'];
    $item_id=$_GET['id'];
    
  // Use delete query to delete the row with user id and items id.
    $sql="delete from user_products where user_id='$user_id' and item_id='$item_id';";
    $result= mysqli_query($conn, $sql);
    if($result)
    {
        //Redirect the user to cart.php page after successful deletion. 
        header('location: cart.php'); 
    
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
 ?>