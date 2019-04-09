<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
    
    //if user not logged in redirect to index page
    if (!isset($_SESSION['email'])) 
    {  
    header('location: index.php'); 
    } 
    ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <?php

//values

  $old_password = test_input($_POST["old_password"]);

  $new_password= test_input($_POST["new_password"]);
  $retype_new_password= test_input($_POST["retype_new_password"]);
  
  
//backend validation
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$user_id=$_SESSION['user_id'];

//Use select query to fetch the password stored in the database.
$sql="select password from users where user_id='$user_id'; ";
$result=mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

// ● If password matches, write the update query. ● 
if(password_verify($old_password,$row['password']))
{
   //to check whether the new password and retype new password
    if(strlen($new_password)== strlen($retype_new_password))
    {
        $new_password=password_hash($new_password, PASSWORD_BCRYPT);
        $sqlnew = "update users set password='$new_password' where user_id='$user_id';";
        $resultnew=mysqli_query($conn, $sqlnew);
        if($resultnew)
        {
        header("Location: password_changed.php");}
    }
    else
    {
       header("Location: try_again_settings.php");
    }
   
}

//when the old password and the password in the database do not match, redirect to settings page with the error message
else {
    header("Location: try_again_settings.php");
}





?>


    </body>
</html>




