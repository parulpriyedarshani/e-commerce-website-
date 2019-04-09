<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
    
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

  $email = test_input($_POST["email"]);
  $name= test_input($_POST["name"]);
  $contact= test_input($_POST["contact"]);
  $address= test_input($_POST["address"]);
  $city= test_input($_POST["city"]);
  $password = test_input($_POST["password"]);
  $password= password_hash($password, PASSWORD_BCRYPT);
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$sql="select * from users where email ='$email'; ";
$result=mysqli_query($conn, $sql);

$row=mysqli_num_rows($result);

if(row>1)
{
    //if the email id already exists in the database, redirect the user to the signup page prompting to enter a valid email id
    header("Location: try_again_signup.php");
}
 else 
{
   $sqlnew = "INSERT INTO users (name,email,password,contact,city,address)
VALUES ('$name','$email','$password','$contact','$city','$address')";


$resultnew=mysqli_query($conn, $sqlnew);
if ($resultnew) {
    //set session variables
   
    $_SESSION['email']=$email;
    $user_id= mysqli_insert_id($conn);
    $_SESSION['user_id']=$user_id;
    header('location: products.php');
 
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}




?>


    </body>
</html>




