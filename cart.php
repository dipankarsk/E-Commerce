 <?php
   include 'core/database/connect.php';
 session_start();
 error_reporting(0);
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
 ?>
 <li> <a href="javascript:lightbox(&quot<div class=cart>
                                      <div class=cart-wrap>
                                      <div class=title-cart>
                                      <i class=icon-basket></i>
                                      <h1>MY CART <span> <?php echo $no;?> </span><h1>
                                      </div>
                                      <a href><div class=close>
                                      <a href=javascript:closeLightbox();></a>
                                      </div></a>
                                      <div class=table>
                                      <div class=heading>
                                                <div class=col id=hrow1>Product</div>
                                                <div class=col id=hrow2>Description(s)</div>
                                                <div class=col id=hrow3>Quantity</div>
                                                <div class=col id=hrow4>Unit Price</div>
                                                <div class=col id=hrow5>Delivery</div>
                                                <div class=col id=hrow6>Subtotal</div>
                                                <div class=clearfix></div>
                                       </div>
                                       
                                  <div class=table-wrap>
                								  <?php while($row=mysql_fetch_assoc($query)){ 
                								  if($row['category']==='rosogolla') 
                					 {
                					 
                					 $name=md5('9777443097argha1');
                					 }
                					  else if($row['category']==='mistidoi') 
                					 {
                					 
                					 $name=md5('9777443097argha2');
                					 }
                					  else if($row['category']==='sandesh') 
                					 {
                					 
                					 $name=md5('9777443097argha3');
                					 }  
									 $id=$row['item_id'];
                				     $q=$_SESSION['quantity'][$id];
                	                 $subtotal=$q*$row['rate1'];
        						     $sum=$sum+$subtotal;
									        echo'<div class=table-row>
									   
                                       <div class=col id=row1 pad><img src='.$row['image'].'></img></div>
									                     <div class=col id=row2>'.$row['product_name'].'</div>
                                        <div class=col id=row3>
                                          <div class=qty-wrap>
                                            <input type=text  title=Qty class=qty value='.$q.' id='.$row['item_id'].'>
                                            <button type=button class=up value='.$row['item_id'].'><i class=icon-triangle-up></i></button>
                                            <button type=button class=down value='.$row['item_id'].'><i class=icon-triangle-down></i></button>
                                          </div>
                                        </div>
                                        <div class=col id=row4>'.$row['rate1'].'</div>
                                        <div class=col id=row5>Free Delivery</div>
                                        <div class=col id=row6>'.$subtotal.'</div>
                                        <a href=remove_cart_item.php?id='.$row['item_id'].'&name='.$name.'><div class=col id=row7></div></a>
                                        <div class=clearfix></div>
													</div>'
													
													;}?>
										
                                                
                              </div>
                          </div>
                          <div class=back> 
                              <h2 id=mssg>Insert special message here</h2>
                              <h1><?php echo $no.'Products in your Cart';?></h1>
                              <a href>Continue Shopping</a>
                          </div>
                          <div class=checkout> 
                              <h2>Delivery Charges: <span> Free </span></h2>
                              <h1>Amount Payable: <span id=sum><?php echo'Rs'.$sum?> </span></h1>
                              <a href=orders.php?<?php echo 'ids='.$ids.'&q='.$quantity?>>Proceed to Checkout</a>
				
                          </div>
                      </div>
                  </div> &quot,null);"><i class="icon-shopping-cart"></i>
								<?php
								                  if($counting>0)
												  {
                                                  echo '<span>'.$counting.'</span></a></li>';
												  }
			                     ?>
	                                             