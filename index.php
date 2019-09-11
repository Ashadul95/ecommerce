<?php 
require'common.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Breakpoints - hidden/visible concept</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
 <script src="https://kit.fontawesome.com/b873460107.js"></script>
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
                     <?php if (isset($_SESSION['email'])) { ?>
                         <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        ?> <?php
                        } else { ?>
                                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } ?>
                    </ul>
        </div>
      </div>
    </nav>
        <?php
           if (isset($_SESSION['email'])) { header('location: moreproducts.php'); }
        ?>
         
    
            
            <div class="banner-image">
                
            <div class="container">
              <center>
                
                    <div id="banner_content">
                    
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <button  class="btn btn-danger btn-lg active" type="button" value="shopnow"><a href="moreproducts.php">Shop Now</a></button>
                   
                    
                    </div>
              </center>
            </div>
          </div>
      
  <div class="container">
      
      <div class="jumbotron">
          <center>
          <h1>Welcome to our Lifestyle Store!</h1>
          <p>We have the best cameras , watches and shirts for you. No need to hunt around,we have all in one place.</p>
          </center>
          </div>
      </div>
           
       <div class="container">
            
          <div class="row">
          <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
              
                  <img src="img/camera.jpg" alt="responsive image">
                  <div class="caption">
                      <center>
              <h2>Cameras</h2>
               <p>price Rs.36000.00</p>
             <p>Choose among the best available in the world.</p>
              <a href="cart.php" >  <button type="button" class="btn btn-primary">Add to cart</button></a>
                      </center>
                  </div>
              
              </div>
          </div>
                <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
              
                  <img src="img/watch.jpg" alt="responsive image">
                  <div class="caption">
                      <center>
                        <h2>Watches</h2>
                        <h6><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        </h6>
                        <p>Discount 70%</p>
                        <small><s class="text-secondary">Rs10000</s></small>
                         <span class="price"> Rs.6000.00</span>
             <p>Original watch from the best brand.</p>
                    <a href="cart.php" >  <button type="button" class="btn btn-primary">Add to cart<i class="fas fa-shopping-cart"></i></button></a>
                      </center>
                  </div>
              
              </div>
          </div>
                <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
              
                  <img src="img/shirt.jpg" alt="responsive image">
                  <div class="caption">
                      <center>
                    <h2>Shirts</h2>
                     <p>price Rs.360.00</p>
             <p>Our exquisite collection of shirts.</p>
                     <a href="cart.php" >  <button type="button" class="btn btn-primary">Add to cart</button></a></center>
                  </div>
              
              </div>
          </div>
              
          </div>
          </div>
      <div class="container">
      
      <div class="jumbotron">
          <center>
          
              <h2> ! ! TO See More product<a href="moreproducts.php">  click here</a></h2>
          </center>
          </div>
      </div>
      
      <footer>
            <div class="container">
                
                <center>
                <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>    
                </center>
                </div>
            </footer>
      
      
      
      
      
      
      
      
      
      
      
      
   
      </body>
</html>




