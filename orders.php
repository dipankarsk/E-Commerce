<?php 
session_start();
include 'core/database/connect.php';
error_reporting(0);

$ids=$_GET['ids'];
$query=mysql_query("select * from items where item_id IN ({$ids})");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E-Commerce Landing Page</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two|Arbutus+Slab|Rokkitt:400,700|Niconne|Droid+Sans|PT+Serif|Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    
    <script src="jquery/prefixfree.min.js"></script>
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script src="jquery/jquery-migrate-1.2.1.min.js"></script>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
    <script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="js\/1.7.2.jquery.min"><\/script>')</script>
    </head>
    <body>
    <div class="header">
        <div class="wrapper">
            <div class="logo"></div>
                    
            <form class="search">
                <input name="header_search" id="common_search-input" data-source-action="CommonSearch/send=alias" class="m-form-autocomplete" data-select-handler="Common.handleSelectedProduct" data-skip-select="1" placeholder="Search">     
            </form>
            
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Our Products</a></li>
                <li>Shop</li>
                <li><a href="#">Contact</a></li>            
            </ul>            
        </div>
    </div>
    <!-- ATTENTION: when creating the include files, header is till here-->
    <div class="content dynamic" id="order">
        <div class="wrapper">
            <div id="container">
                <div class="prog">
                    <div class="cont">
                        <progress id="progress-bar" min="1" max="100" value="0"></progress>
                        <span class="steps first border-change"></span>
                        <span class="steps sec next-1"></span>
                        <span class="steps third"></span>
                        <span class="steps fourth"></span>
                        <p class="percent">0% Complete</p>
                    </div>
                </div>
                <div class="step next-1">
                    <div class="email">
                        <article class="left">
                            <p>
                                <label>What is your Email Address?</label></br>
                                <span><input class="regform" type="email" name="name" id="o_email">
                                </span> <span class="errmssg" id="error1"></span>          
                            </p>
                            <a href="javascript:void(0)" class="next-1" id="one">Continue Shopping</a>
                        </article>
						
                        <article class="right">
                        </article>
                    </div>
                </div>
				
                <div class="step hidden next-2">
                    <div class="address">
                        <table>
                            <tbody>
                                <tr>
                                    <td id="order_name" class="text">
                                        <label>Name:</label>
                                    </td>
                                    <td>
                                        <span><input class="regform" type="text" name="name" id="o_name"></span>
                                        <span class="errmssg" id="error2"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text">
                                        <label>Pincode:</label>
                                    </td>
                                    <td>
                                        <span><input class="regform" type="text" name="name" id="o_pin"></span>
                                        <span class="errmssg" id="error3"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text" id="vtop">
                                        <div><label>Address:</label></div>
                                    </td>
                                    <td>
                                        <span><textarea cols="30" rows="4" class="regform" id="o_add"></textarea></span>
                                        <span class="errmssg" id="error4"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text">
                                        <label>Phone: + 91</label>
                                    </td>
                                    <td>
                                        <span><input class="regform" type="text" name="name" id="o_phn"></span>
                                        <span class="errmssg" id="error5"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text">
                                        
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="next-2">Continue Shopping</a>
                                    </td>
                                </tr>
                            </tbody>    
                        </table>
                    </div>          
                </div>
                <div class="step hidden next-3">
                    <div class="table">
                        <div class="heading">
                            <div class="col" id="hrow1">Product</div>
                            <div class="col" id="hrow2">Description(s)</div>
                            <div class="col" id="hrow3">Quantity</div>
                            <div class="col" id="hrow4">Unit Price</div>
                            <div class="col" id="hrow5">Delivery Options</div>
                            <div class="col" id="hrow6">Subtotal</div>
                            <div class=clearfix></div>
                        </div>
                        <div class="table-wrap" style="max-height:250px;">
						<?php
						while($row=mysql_fetch_assoc($query)){ 
						$id=$row['item_id'];
						$q=$_SESSION['quantity'][$id];
						$subtotal=$q*$row['rate1'];
                            echo'<div class="table-row">
                                <div class="col" id="row1"><img src="'.$row['image'].'"></img></div>
                                <div class="col" id="row2">'.$row['product_name'].'</div>
                                <div class="col" id="row3">
                                    <div class="qty-wrap">
                                        <input type="text" name="qty" title="Qty" class="qty" value='.$q.'>
                                        <button type="button" class="up hidden"><i class="icon-triangle-up"></i></button>
                                        <button type="button" class="down hidden"><i class="icon-triangle-down"></i></button>
                                    </div>
                                </div>
                                <div class="col" id="row4">'.$row['rate1'].'</div>
                                <div class="col" id="row5">Free Delivery</div>
                                <div class="col" id="row6">'.$subtotal.'</div>
                                <div class=clearfix></div>
                            </div>';
							}
                           ?>
                           
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="next-3">Continue Shopping</a>
                </div>
                <div class="step hidden next-4">
                    <div class="final">
                        <article class="left">
                            <h1>Thank you for shopping with us!</h1>
                            <p>Your order has been placed and is being processed. When the item(s) are shipped, you will recieve an email with the details.</p>
                            <p><span>Rs 480</span> paid through cash on delivery</p>
                        </article>
                        <article class="right">
                            <p><span id="u_name"></span></p>
                            <p id="c_add"></p>
                        </article>
                    </div>
                    <div class="prog-icon">
                        <span><i class="flaticon-delivery30"></i></span>
                        <span><i class="greater flaticon-move13"></i></span>
                        <span><i class="flaticon-delivered"></i></span>
                        <span><i class="greater flaticon-move13"></i></span>
                        <span><i class="flaticon-logistics3"></i></span>
                        <span><i class="greater flaticon-move13"></i></span>
                        <span><i class="flaticon-delivery35"></i></span>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <p>Copyright of DeltaByte Designs</p>
        </div>
    </footer>   
   <script type="text/javascript">
        $(document).ready(function(){
            
        });
        $('.step a').click(function(){
	var e=$('#error1').text();
	var e2=$('#error2').text();
	var e3=$('#error3').text();
	var e4=$('#error4').text();
	var e5=$('#error5').text();
	var email=$('#o_email').val();
	
            if($(this).hasClass('next-1')){
			if(e==''&& email!='' )
	    {
                $('.cont .next-1').nextAll().removeClass('border-change');
                $('#progress-bar').val('34');  
                $('.cont .next-1').prevAll().addClass('border-change');  
                $('.cont .next-1').addClass('border-change');
                $('.percent').html("33% Complete");
                $('div.step.next-1').toggleClass('hidden');
                $('div.step.next-2').toggleClass('hidden');
           } }else if($(this).hasClass('next-2')){
		   if(e2=='')
	{
                $('.cont .next-2').nextAll().removeClass('border-change');
                $('#progress-bar').val('67');  
                $('.cont .next-2').prevAll().addClass('border-change');  
                $('.cont .next-2').addClass('border-change');
                $('.percent').html("66% Complete");
                $('.step.next-2').toggleClass('hidden');
                $('.step.next-3').toggleClass('hidden');
           } }else{
                $('#progress-bar').val('100');
                $('.cont .next-3').addClass('border-change');
                $('.cont .next-3').prevAll().addClass('border-change');
                $('.percent').html("100% Complete");
                $('.step.next-3').toggleClass('hidden');
                $('.step.next-4').toggleClass('hidden');
             }
			
			 
        });
		
		
	 
     $('.next-3').click(function()
	 {
	 var email=$('#o_email').val();
	 var name=$('#o_name').val();
	 var pin=$('#o_pin').val();
	 var phone=$('#o_phn').val();
	 var address=$('#o_add').val();
	  
		$.get('order_process.php',{email:email,name:name,pincode:pin,phone:phone,address:address},function(data){
        alert(data);
        });
	 $('#c_add').text(address);
	 $('#u_name').text(name);
	 });
	 
	 
	  
	 
	 
	 $('#o_email').keyup(function(){
	 var email=$(this).val();
	 $.get('order_error.php',{email:email},function(data){
       
        $('#error1').text(data);
     });
	 });
    </script>
	
</body>
</html>