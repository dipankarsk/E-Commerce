<?php
include 'core/database/connect.php';
session_start();
error_reporting(0);
$val=$_GET['search'];
$query=mysql_query("select * from items where product_name LIKE '$val%'");
while($row=mysql_fetch_assoc($query))
{
 echo'<div class="grid p7">
									    <a href="details.php?pass1='.md5($row['category']).'&id='.($row['item_id']).'">
									  <img src="img/peach.png"/></a>
                                      <div class="desc">
                                      <h4>'.$row['brand_name'].'</h4>
                                      <h1>'.$row['product_name'].'</h1>
                                      <h2>1kg @ Rs'.$row['rate1'].'</h2>
                                      
}
?>