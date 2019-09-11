<?php require'common.php';
?>
<?php
if (isset($_SESSION['email'])) { header('location: moreproducts.php'); }
?>
<!DOCTYPE html>



<html>
  <head>
    <title>Breakpoints - hidden/visible concept</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <link rel="stylesheet" type="text/css" href="style.css"> 
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
        
            <?php include'header.php'?>
        
                <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form action="user_registration_script.php" method="post">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="phone" name="phone" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
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
