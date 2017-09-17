<?php
$error='sorry';
$flag = 0;
mysql_connect('localhost','root','')or die($error);
mysql_select_db('shop')or die($error);
if(isset($_POST['search_term'])==true && empty($_POST['search_term'])==false)
{
	$search_term=mysql_real_escape_string($_POST['search_term']);
	$query=mysql_query("SELECT * FROM items WHERE product_name LIKE '$search_term%' OR category LIKE '$search_term%' OR stars LIKE '$search_term%'");
	while(($row=mysql_fetch_assoc($query))!==false)
	{
		$flag = 1;
		echo '<a href="javascript:void(0);"><a href="details.php?pass1='.md5($row['category']).'&id='.$row['item_id'].'&i=d"><li><img src="'.$row['image'].'"/><ul><li><span class="name"> '.$row['product_name'].' in Department </span></li><li><span class="rates star',$row['stars'].' "></span> stars <span class="price"> Rs '.$row['rate1'],' </span></li></ul></li></a></a>';
	}
}
if($flag == 0){
	echo '<a href="javascript:void(0);"><li class="empty_search"><p> No items matched your query. </p></li></a>';
}
?>

		