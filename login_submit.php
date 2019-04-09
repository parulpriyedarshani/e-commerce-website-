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
        
       
       //Store the login form data into variables. 

  $email =  mysqli_real_escape_string($conn,$_POST["email"]); //Use mysqli_real_escape_string function for security. 
  $pw = test_input($_POST["password"]); //Use mysqli_real_escape_string function for security. 
  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$sql="select * from users where email ='$email'; ";
$result=mysqli_query($conn,$sql);
$row1=mysqli_fetch_row($result);
$row=mysqli_num_rows($result);


if($row==0 )
{   
    //id doesnt exist
     header("Location: signup.php");
}
else if(password_verify($pw,$row1[3]))
{
    //set session variables
   
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$row1[0];
header('location: products.php');}

else{
    header("Location: try_again_login.php");
    
}
   ?>  
    </body>
</html>
