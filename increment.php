<?php
 include 'core/database/connect.php';
 $idnew=$_GET['id'];
 $quan=$_GET['quan'];
 session_start();
 $_SESSION['quantity'][$idnew]=$quan;
//print_r( $_SESSION['quantity']);
 if(count($_SESSION['cart_items'])>0){
 
    // get the product ids
	$counting=count($_SESSION['cart_items']);
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }
 
    // remove the last comma
    $ids = rtrim($ids, ',');
}
$no=count($_SESSION['cart_items']);
$query=mysql_query("select * from items where item_id IN ({$ids})");
$sum=0;
while($row=mysql_fetch_assoc($query)){ 

                                  $id=$row['item_id'];
								  $q=$_SESSION['quantity'][$id];
					              $subtotal=$q*$row['rate1'];
								  $sum=$sum+$subtotal;

}
echo $sum;
 ?>