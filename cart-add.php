<?php

$id=$_GET['id'];
include'common.php';
$cart_query="INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$cart_query_result=mysqli_query($con,$cart_query);

include'header.php';

?>