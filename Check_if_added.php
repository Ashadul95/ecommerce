<?php


function check_if_added_to_cart($con,$product_id){
 include'common.php';  
$users_products_query="SELECT * FROM users_products WHERE user_id='$user_id' AND product_id ='$product_id' and status='Added to cart'";
$users_products_result=mysqli_query($con,$users_products_query);
$number_of_products=mysqli_num_rows($users_products_result);
if($number_of_products>=1){
    return 1;
    
}else{
    return 0;
}

    
}

?>


