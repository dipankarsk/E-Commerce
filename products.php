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
                <li class="on"><a href="products.php">Categories</a></li>
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
    <div class="overlay"></div>
    
	
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
				<div class="content dynamic">
				<div class="wrapper">
				<div class="main">
			

                <div class="blocks">
				<?php 
				include'core/database/connect.php' ;
				$category='rosogolla';
				$query=mysql_query("select * from items where `category`='$category' limit 0,3");
				?>
                <div class="heading">
                <a href="items.php?
				<?php 
				$pass1='9777443097argha1';
				$pass1=md5($pass1);
				echo 'pass1='.$pass1;?>">
                <h3>Rosogolla</h3>
                <p>Hand selected by our quality check experts</p>
                </a>
                </div>
				<?php
				while($row=mysql_fetch_assoc($query))
				{
                    echo '
                         <div class="grid">
                         <a href="details.php?pass1='.md5($row['category']).'&id='.($row['item_id']).'">
                         <div class="grid p7">
                         <img src="'.$row['image'].'">
                         <h4>'.$row['brand_name'].'</h1>
                         <h1>'.$row['product_name'].'</h1>
                         </div>
                         </a>
                         </div>';
			    }
					?>	 
                 <div class="clearfix"></div>
			     </div>
				
				
                <div class="blocks">
				<?php 
				include'core/database/connect.php' ;
				$category='mistidoi';
				$query=mysql_query("select * from items where `category`='$category' limit 0,3");
				?>
                <div class="heading">
                <a href="items.php?
				<?php 
				$pass1='9777443097argha2';
				$pass1=md5($pass1);
				echo 'pass1='.$pass1;?>">
                <h3>Misti Doi</h3>
                <p>Hand selected by our quality check experts</p>
                </a>
                </div>
				<?php
				while($row=mysql_fetch_assoc($query))
				{
                    echo '
                         <div class="grid">
                         <a href="details.php?pass1='.md5($row['category']).'&id='.($row['item_id']).'">
                         <div class="grid p7">
                         <img src="'.$row['image'].'">
                         <h4>'.$row['brand_name'].'</h1>
                         <h1>'.$row['product_name'].'</h1>
                         </div>
                         </a>
                         </div>';
			    }
					?>	 
                 <div class="clearfix"></div>
			     </div>
				
				
				
			 <div class="blocks">
				<?php 
				include'core/database/connect.php' ;
				$category='sandesh';
				$query=mysql_query("select * from items where `category`='$category' limit 0,6");
				?>
                <div class="heading">
                <a href="items.php?
				<?php 
				$pass1='9777443097argha3';
				$pass1=md5($pass1);
				echo 'pass1='.$pass1;?>">
                <h3>Sandesh</h3>
                <p>Hand selected by our quality check experts</p>
                </a>
                </div>
				<?php
				while($row=mysql_fetch_assoc($query))
				{
                    echo '
                         <div class="grid">
                         <a href="details.php?pass1='.md5($row['category']).'&id='.($row['item_id']).'">
                         <div class="grid p7">
                         <img src="'.$row['image'].'">
                         <h4>'.$row['brand_name'].'</h1>
                         <h1>'.$row['product_name'].'</h1>
                         </div>
                         </a>
                         </div>';
			    }
					?>	 
                 <div class="clearfix"></div>
			     </div>
				
				
				<div class="blocks">
                <div class="heading">
                <a href="">
                <h3>Fried misti</h3>
                <p>Hand selected by our creative director</p>
                </a>
                </div>
                <div class="grid">
                <a href="details.php">
			    <div class="grid p7">
			    <img src="img/apple.jpg">
                <h4>Brand Name</h1>
                <h1>Product name</h1>
			    </div>
			    </a>
                </div>
                    <div class="clearfix"></div>
                </div>
				
				 <div class="blocks">
                <div class="heading">
                <a href="">
                <h3>Baked</h3>
                <p>Hand selected by our creative director</p>
                </a>
                </div>
                <div class="grid">
                <a href="details.php">
			    <div class="grid p7">
			    <img src="img/apple.jpg">
                <h4>Brand Name</h1>
                <h1>Product name</h1>
			    </div>
			    </a>
                </div>
                    <div class="clearfix"></div>
                </div>
				
				
				 <div class="blocks">
                <div class="heading">
                <a href="">
                <h3>Son Papri</h3>
                <p>Hand selected by our creative director</p>
                </a>
                </div>
                <div class="grid">
                <a href="details.php">
			    <div class="grid p7">
			    <img src="img/apple.jpg">
                <h4>Brand Name</h1>
                <h1>Product name</h1>
			    </div>
			    </a>
                </div>
                    <div class="clearfix"></div>
                </div>
				
				
                </div>	
    	        </div>
                </div>
    <footer>
        <div class="wrapper">
            <p>Copyright @ googols.com</p>
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
    </script>    
</body>
</html>