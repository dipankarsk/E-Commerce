<?php
include 'core/database/connect.php';
session_start();
error_reporting(0);
$val=$_GET['username'];
$val2=$_GET['name'];
if(!isset($_SESSION['items']))
{
    $_SESSION['items'] = array();
}
if(array_key_exists($val, $_SESSION['items']))
{
unset($_SESSION['items'][$val]);
$val='';
}
else
{
    $_SESSION['items'][$val]=$val;
}
			$heading=$val2;
                     if($heading===md5('9777443097argha1')) 
					 {
					 
					 //echo 'Rosogolla';
					 $category='rosogolla';
					 }
					 else if($heading===md5('9777443097argha2'))
					 {
                     $category='mistidoi';
					// echo 'Mishti Doi';
					 }
					 else if($heading===md5('9777443097argha3'))
					 {
					 $category='sandesh';
					// echo 'Sandesh';
					 }
					 else if($heading===md5('9777443097argha4'))
					 {
					 $category='friedmisti';
					// echo 'Fried Misti';
					 }
					 else if($heading===md5('9777443097argha5'))
					 {
					 $category='baked';
					 //echo 'Baked';
					 }
					 else if($heading===md5('9777443097argha6'))
					 {
					 $category='sonpapri';
					 //echo 'Son Papri';
					 }
					 else if($heading===md5('9777443097argha7'))
					 {
					 $category='more';
					 //echo 'More';
					 }
					 
					 if($_SESSION['items'][100])
					 $query=mysql_query("select * from items where `category`='$category' AND rate1<100");
					 else if($_SESSION['items'][200])
					 $query=mysql_query("select * from items where `category`='$category' AND rate1<200");
					 else if($_SESSION['items'][300])
					 $query=mysql_query("select * from items where `category`='$category' AND rate1<300");
					 else if($_SESSION['items'][400])
					 $query=mysql_query("select * from items where `category`='$category' AND rate1<400");
					 else if($_SESSION['items'][500])
					 $query=mysql_query("select * from items where `category`='$category' AND rate1<500");
					 else if($_SESSION['items'][600])
					 $query=mysql_query("select * from items where `category`='$category' AND brand_name='kcdas'");
					 else if($_SESSION['items'][700])
					 $query=mysql_query("select * from items where `category`='$category' AND brand_name='nakur'");
					 else if($_SESSION['items'][800])
					 $query=mysql_query("select * from items where `category`='$category' AND brand_name='C'");
					 else if($_SESSION['items'][900])
					 $query=mysql_query("select * from items where `category`='$category' AND brand_name='D'");
					 
					 else if($_SESSION['items'][5])
					 $query=mysql_query("select * from items where `category`='$category' AND stars=5");
					 else if($_SESSION['items'][4])
					 $query=mysql_query("select * from items where `category`='$category' AND stars=4");
					 else if($_SESSION['items'][3])
					 $query=mysql_query("select * from items where `category`='$category' AND stars=3");
					 else if($_SESSION['items'][2])
					 $query=mysql_query("select * from items where `category`='$category' AND stars=2");
					 else if($_SESSION['items'][1])
					 $query=mysql_query("select * from items where `category`='$category' AND stars=1");
					 else
					 $query=mysql_query("select * from items where `category`='$category'");	
while($row=mysql_fetch_assoc($query))
								   {
							          echo'<div class="p7">
									    <a href="details.php?pass1='.md5($row['category']).'&id='.($row['item_id']).'">
									  <img src="'.$row['image'].'"/></a>
                                      <div class="desc">
                                      <h4>'.$row['brand_name'].'</h4>
                                      <h1>'.$row['product_name'].'</h1>
                                      <h2>1kg @ Rs'.$row['rate1'].'</h2>
                                      <a href="add_to_cart.php?pass1='.$heading.'&search='.$search.'&id='.$row['item_id'].'">Add</a>
                                </div>
                                </div> ';
							       }					 
                    //print_r($_SESSION['items']);
					 //echo $val.' '.$val2;
?>