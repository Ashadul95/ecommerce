<?php
 
$con=mysqli_connect("localhost","root","","ecommerce")or die(mysqli_error($con));
 
$products_query="SELECT * FROM products ";
$result=mysqli_query($con,$products_query);

if(mysqli_num_rows($result)>0){
    return $result;
    
}else{
    return 0;
}

