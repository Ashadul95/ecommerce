<?php require'common.php';
require'component.php';
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array = array(
                'product_id' => $_POST['product_id']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Breakpoints - hidden/visible concept</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        footer{padding: 10px 0;
 background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
width: 100%;}
    
    </style>
  </head>
  <body>
   <?php include'header.php';?>
           
         <div class="container">
            
            <div class="row text-center py-5">
        <?php 
         require'showproducts.php';
         
        while($row=mysqli_fetch_array($result)){
            component($row['name'], $row['price Rs'], $row['image'],$row['id']);
        }
        
        ?>
       
      
      <footer>
            <div class="container">
                
                <center>
                <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>    
                </center>
                </div>
            </footer>
      
      
      
      
      
      
      
      
      
      
      
      
   
      </body>
</html>




