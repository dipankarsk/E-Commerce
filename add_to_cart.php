<?php
session_start();
//error_reporting(0);
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['pass1']) ? $_GET['pass1'] : "";
$search=isset($_GET['search']) ? $_GET['search'] : "";
$identifier=isset($_GET['i']) ? $_GET['i'] : "";
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
    $_SESSION['quantity'] = array();
	
	
}


 
// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart_items'])){
    // redirect to product list and tell the user it was added to cart
	if(empty($name))
	{
	 header('Location:items.php?header_search='.$search);
	}
	else
	{
	if($identifier==='d')
	{
	header('Location:details.php?pass1='.$name.'&id='.$id.'&i=d');
	}
	else
	{
   header('Location:items.php?pass1='.$name);
   }
   
   }
}
 
// else, add the item to the array
else{
    $_SESSION['cart_items'][$id]=$id;
    $_SESSION['quantity'][$id]=1;
 
    // redirect to product list and tell the user it was added to cart
   if(empty($name))
	{
	
	 header('Location:items.php?header_search='.$search);
	}
	else
	{
	if($identifier==='d')
	{
	header('Location:details.php?pass1='.$name.'&id='.$id.'&i=d');
	}
	else
	{
   header('Location:items.php?pass1='.$name);
   }
   }
}
if(count($_SESSION['cart_items'])>0){
 
    // get the product ids
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }
 
    // remove the last comma
    $ids = rtrim($ids, ',');
//print_r($_SESSION);
//echo '</br>'.$_SESSION['quantity'][$id];
//echo '</br>'.$name;
//echo $ids;
}
?>