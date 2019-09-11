
<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

mysqli_select_db($con,'ecommerce');

$email= mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$select_query="SELECT email,password FROM users WHERE email='$email' AND password='$password' ";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result)or die(mysqli_error($con));
if($total_rows_fetched>0){
   $_SESSION['email']=$email;
   header('location:index.php');
}
else{
header('location:signup.php');
echo"signin first";
}


$_SESSION['user_id']=mysqli_insert_id($con); 
            
?>
    


