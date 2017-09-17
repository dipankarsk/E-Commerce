<?php
session_start();
//error_reporting(0);

require 'database/connection.php';
require 'functions/general.php';
require 'functions/users.php';
if(logged_in()===true)
{
 $session_user_name=$_SESSION['username'];
 $user_data=user_data($session_user_name,'user_id','username','password','first_name','last_name','email');
 if(user_active($user_data['username'])===false)
 {
    session_destroy();
    header('Location:index.php');
	exit();
  } 
 }
$errors=array();
?>