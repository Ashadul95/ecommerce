<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

mysqli_select_db($con,'ecommerce');
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$phone = $_POST['phone'];
$city=$_POST['city'];
$address=$_POST['address'];
$select_query="SELECT email,password FROM users WHERE email='$email' AND password='$password' ";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
if($total_rows_fetched>0){echo"user have already signin";}
else{
$user_registration_query="INSERT INTO users(name,email,password,phone,city,address)values('$name','$email','$password','$phone','$city','$address')";
$user_registration_submit=mysqli_query($con,$user_registration_query)or die(mysqli_error($con));
echo"successfull signup";
}

$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);

$_SESSION['user_id']=mysqli_insert_id($con); 


?>