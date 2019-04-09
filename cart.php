<?php
    require 'C:\wamp\www\ecommerce\includes\common.php';
   
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
            $user_id=$_SESSION['user_id'];
            
            // Select all the items from users_products of particular user.
            //Use inner join to get the product details of the items added to cart by the user.
   
            
            $sql="select * from user_products inner join products on (user_products.item_id=products.item_id) where user_id=6 and status='Added to cart' ; ";
            $result= mysqli_query($conn, $sql);
            
            //If mysqli_num_rows ==0, show message that “Add items to the cart first!”.
            if(mysqli_num_rows($result)==0)
            {
   
                header('location:try_again_products.php'); 
            }
            else
            {  ?>
               
        
        
        
        <div class="container">
            <center>
            <table style="margin-top:100px" class=" table-striped">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th></th>
                    
                    
                </tr>
                    
                <?php
                //initialise id and cost variable
                $total_cost=0;
                $id_list=array();
    while ($row1=mysqli_fetch_row($result))
            {
                $id=$row1[2];
       
		?>
                                <!--Display all the items added to cart by the user. -->
				<tr>
				<td><?php echo $row1[2]; ?></td>
				<td><?php echo $row1[5]; ?></td>
			
				<td  style="text-align:right;"><?php echo "Rs ".$row1[6]; ?></td>
                                <!--Add a link in front of each item <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>  -->
				<td style="text-align:center;"> <a href="cart-remove.php?id=<?php echo $id;?>" class='remove_item_link'> Remove</a></td>
				</tr>
				<?php
                                $total_cost=$total_cost+$row1[6];
                                
                                //append all id’s of the items separated by comma.
                                array_push($id_list,$row1[2]);
				
		}
            }
		?>
    
                   
                <!--Last row will be out of the while loop which will contain total and a link to success page with id variable initialized will be passed as GET function. -->
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td align="right"><?php echo $total_cost; ?></td>
                    <?php

$Text = json_encode($id_list);
$RequestText = urlencode($Text);
?>

                    <td><a href="success.php?id=<?php echo $RequestText; ?>" class="btn btn-primary">Confirm Order</a></td>
                  
                </tr>
            </table>
            </center>
        </div>
   
       <?php
        
        include 'C:\wamp\www\ecommerce\includes\footer.php';
        ?>
    </body>

    </html>