<?php include 'core/database/connect.php';
error_reporting(0);
$email=$_GET['email'];
$name=$_GET['name'];
$pin=$_GET['pincode'];
$phone=$_GET['phone'];
$address=$_GET['address'];

mysql_query("insert into customers(email,name,pincode,address,phone) values('$email','$name','$pin','$address','$phone')");

echo 'its done';
?>