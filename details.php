<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E-Commerce Landing Page</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nprogress.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600|Lobster+Two|Arbutus+Slab|Rokkitt:400,700|Niconne|Droid+Sans|PT+Serif|Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    
    <script src="jquery/lightbox.js"></script>
    <script src="jquery/prefixfree.min.js"></script>
    <script src="jquery/hoverIntent.minified.js"></script>
    <script src="jquery/nprogress.js"></script>
    <script src="jquery/wow.min.js"></script>
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script src="jquery/jquery-migrate-1.2.1.min.js"></script>
    <script>
        new WOW().init();
    </script>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="js\/1.7.2.jquery.min"><\/script>')</script>
</head>
<body>
    
    <div class="header">
        <div class="wrapper">
            <div class="logo"></div>
                    
            <form class="search">
                <input type="text" name="header_search" id="common_search-input" class="autosuggest" placeholder="Search">     
                <div class="dropdown">
                    <ul class="result"><ul>
                </div>
            </form>
            
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Categories</a></li>
                <li>Shop</li>
                <li><a href="contact.php">Contact</a></li>            
            </ul> 
           <ul class="log">
                <li><a href="">Login</a></li>
                <li><a href="">Sign up</a></li>
              <?php 
              
 
              include 'cart.php';
              
              ?>
            </ul>          
        </div>
    </div>
    
    <ul class="second">
        <li><a href="items.php?<?php 
        $pass1='9777443097argha1';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Rosogolla</a></li>
        <li><a href="items.php?<?php 
        $pass1='9777443097argha2';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Mishti Doi</a></li>
        <li><a href="items.php?<?php 
        $pass1='9777443097argha3';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Sandesh</a></li>
        <li><a href="items.php?<?php 
        $pass1='9777443097argha4';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Fried Misti</a></li>
        <li><a href="items.php?<?php 
        $pass1='9777443097argha5';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Baked</a></li>            
        <li><a href="items.php?<?php 
        $pass1='9777443097argha6';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">Son Papri</a></li>
        <li><a href="items.php?<?php 
        $pass1='9777443097argha7';
        $pass1=md5($pass1);
        echo 'pass1='.$pass1;?>">More</a></li>
    </ul>
	
	
    <!-- ATTENTION: when creating the include files, header is till here-->
	<?php
	include'core/database/connect.php';
	
	$id=$_GET['id'];
	$heading=$_GET['pass1'];
	$query=mysql_query("select items.image,items.product_name,items.brand_name,details.town,details.detail,details.description,details.rate,details.detail_image from items inner join details on items.item_id=details.item_id where items.item_id='$id'");
	$row=mysql_fetch_assoc($query);
	
	?>
					<div class="content dynamic">
					<div class="wrapper">
					<div class="main">
					<div class="item">
                   <?php echo'<img src="'.$row['detail_image'].'"></img>';?>
                    <div class="details">
                        <h1> <?php echo $row['product_name'];?></h1>
                        <span>1 boxes (about 5 pieces of item)</span>
                        <span class="price"> <?php echo 'Rs.'. $row['rate']; ; ?> </span>
                        <div class="buy">
                            <div class="outer">
                                <div class="inner">
                                    <input type="text" name="qty" title="Qty" class="qty">
                                    <button type="button" title="Add to Cart" class="btn-cart" onclick="">
                                        
										 <?php
										 echo '<a href="add_to_cart.php?pass1='.$heading.'&search='.$search.'&id='.$id.'&i=d">Add to cart </a>';?>
                                    </button>
                                </div>
                            </div>
                            <div class="rating">
                                <p>Rate us</p>
                                <span class="star-5">☆</span><span class="star-4">☆</span><span class="star-3">☆</span><span class="star-2">☆</span><span class="star-1">☆</span>
                            </div>
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
                <div class="tabs">
                   <div class="tab">
                       <input type="radio" id="tab-1" name="tab-group-1" checked>
                       <label for="tab-1">Product Details</label>
                       
                       <div class="inside">
                           <table>
                                <tbody>
                                    <tr>
                                        <td>Size:</td>
                                        <td>1 boxes (about 5 pieces of item)</td>
                                    </tr>
                                    <tr>
                                        <td>Town:</td>
                                        <td><?php echo $row['town']?></td>
                                    </tr>
                                    <tr>
                                        <td>Makers:</td>
                                        <td><?php echo $row['brand_name'];?></td>
                                    </tr>
                                </tbody>
                           </table>
                       </div> 
                   </div>
                    
                   <div class="tab">
                       <input type="radio" id="tab-2" name="tab-group-1">
                       <label for="tab-2">Description</label>
                       
                       <div class="inside">
                           <p>
						   <?php echo $row['description'] ;?>
                            </p>      
                       </div> 
                   </div>
                    
                    <div class="tab">
                       <input type="radio" id="tab-3" name="tab-group-1">
                       <label for="tab-3">Customer Reviews</label>
                     
                       <div class="inside">
                           <div class="test wow">
                                <p style="font-size:2.8vh;">"Rotary has also helped the world seem smaller; through 
                                service projects in other parts of the world that Davis 
                                Rotary has supported, through people I’ve met"</p>  
                                <div class="rate-con">
                                    <span class="star-5">☆</span><span class="star-4">☆</span><span class="star-3 check">☆</span><span class="star-2 check">☆</span><span class="star-1 check">☆</span>
                                </div>
                                <p style="padding:4% 0;"> - Michael Peterson</p>     
                                <div class="arr_con">
                                    <i class="icon-circle-left"></i>
                                    <i class="icon-circle-right"></i>   
                                </div>
                            </div>
                       </div> 
                   </div>
                </div>
            </div>            
        </div>
    </div>
	
	
    <footer>
        <div class="wrapper">
            <p>Copyright of Gogol's</p>
        </div>
    </footer>   
    <script type="text/javascript">
        $( document ).ready(function() {
            var isOpen = false;
                $('.dropdown').addClass('hidden');
                $('.autosuggest').focus(function(){
                    $(this).addClass('expand');
                });
                 $('.autosuggest').blur(function(){
                    if($('.result a').size()==0){
                        $(this).removeClass('expand');
                        $('.dropdown').addClass('hidden');
                    }
                    else{
                        if($('.result a li').hasClass('empty_search')){
                            //alert("close now");
                            $(this).removeClass('expand');
                            $('.dropdown').addClass('hidden');
                        }
                    }
                });
                $('.autosuggest').keyup(function(){
                    var search_term=$(this).val();
                    $.post('ajax/search.php',{search_term:search_term},function(data){
                        $('.result').html(data);
                    });
                    $('.dropdown').removeClass('hidden');
                });
        });
        $(".nav li:nth-child(3)").click(function(){
            $('.second').toggleClass("second_active");
        });
        $('.rating span').click(function(){
            var cl = $(this).attr('class');
            var num = cl.substr(cl.length-1, cl.length);
            for(var i=num;i>0;i--){
                //alert("first time");
                $('.star-' + i).addClass('check');
            }
            lightbox('<div class=comment style=padding:5%;><div class=close style=top:10px;><a  href=javascript:closeLightbox();></a></div><div class=table><div><div class="text"><label>Add a comment</label></div><div><span><span><textarea cols="30" rows="4" class="regform"></textarea></span></span><span class="errmssg hidden">Error message</span></div><div class="enter"><a href="javascript:void(0);">Enter</a></div></div></div></div>',null);
        });
    </script>  
</body>
</html>

