<?php
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";

// remove the item from the array
unset($_SESSION['cart_items'][$id]);
unset($_SESSION['quantity'][$id]);
// redirect to product list and tell the user it was added to cart
//header('Location: cart.php?action=removed&id=' . $id . '&name=' . $name);
 if(empty($name))
	{
	 header('Location:items.php?header_search='.$search);
	}
	else
	{
    header('Location:items.php?pass1='.$name);
    }
?>