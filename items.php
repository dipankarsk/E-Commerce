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
    <div class="content dynamic">
    	<div class="wrapper">
    		<section class="shop">
                <div class="title">
                     
					 <h1><?php
					  include 'core/database/connect.php';


                     $heading=$_GET['pass1'];
					 if($heading!=' ')
					 {
					 $store=$heading;
					 }
					 
                     if($heading===md5('9777443097argha1')) 
					 {
					 
					 echo 'Rosogolla';
					 $category='rosogolla';
					 }
					 else if($heading===md5('9777443097argha2'))
					 {
                     $category='mistidoi';
					 echo 'Mishti Doi';
					 }
					 else if($heading===md5('9777443097argha3'))
					 {
					 $category='sandesh';
					 echo 'Sandesh';
					 }
					 else if($heading===md5('9777443097argha4'))
					 {
					 $category='friedmisti';
					 echo 'Fried Misti';
					 }
					 else if($heading===md5('9777443097argha5'))
					 {
					 $category='baked';
					 echo 'Baked';
					 }
					 else if($heading===md5('9777443097argha6'))
					 {
					 $category='sonpapri';
					 echo 'Son Papri';
					 }
					 else if($heading===md5('9777443097argha7'))
					 {
					 $category='more';
					 echo 'More';
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
					 if($_GET['header_search'])
					 {
					 $heading=$store;
					 $search=$_GET['header_search'];
					 $query=mysql_query("select * from items where brand_name='$search'");
					 }
					?></h1>
					
                </div>
				
                <div class="toolbar">
                    <div class="toggle">Hide Filters</div>
                    <div class="options">
                        <ul>
                            <li><a href="">Popular</a></li>
                            <li><a href="">Alphabetic</a></li>
                            <li><a href="">Offers</a></li>
                        </ul>
                    </div>
                    <div class="pages"></div>
                </div>
                <div class="main">
                    <section class="food">
                      
					  <div class="grid">
                           
							<?php 
							
							       while($row=mysql_fetch_assoc($query))
								   {
							          echo'<div class="p7">
									    <a href="details.php?pass1='.md5($row['category']).'&id='.$row['item_id'].'&i=d">
									  <img src="'.$row['image'].'"/></a>
                                      <div class="desc">
                                      <h4>'.$row['brand_name'].'</h4>
                                      <h1>'.$row['product_name'].'</h1>
                                      <h2>1kg @ Rs'.$row['rate1'].'</h2>
                                      <a href="add_to_cart.php?pass1='.$heading.'&search='.$search.'&id='.$row['item_id'].'">Add</a>
                                </div>
                                </div> ';
							       }
								   
							?>
							
                        </div>
                        <div class="clearfix"></div>
                    </section>
					
                    <div class="filter">
                        <div class="categories">
                            <div class="fheader">
                                <h1>Categories</h1>
                            </div>
                            <ul class="level-1">
                                <li>
                                    <a href="javascript:void(0);">Item 1</a>
                                    <ul class="level-2">
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                            <ul class="level-3">
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                           <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Item 1</a>
                                    <ul class="level-2">
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                            <ul class="level-3">
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                           <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Item 1</a>
                                    <ul class="level-2">
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                            <ul class="level-3">
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                           <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Item 1</a>
                                    <ul class="level-2">
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                            <ul class="level-3">
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <div class="arrow"></div>
                                                    <a href="javascript:void(0);">Item 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                            <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <div class="arrow"></div>
                                           <a href="javascript:void(0);">Item 1</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						
                        <div class="price">
                            <div class="fheader">
                                <h1>Price</h1>
                            </div>
                            <ul>
                                <li>
                                    <input class="checkbox" type="checkbox"<?php if($_SESSION['items'][100])echo 'checked';?> name="<?php echo $heading;?>" id="fprice" value="100">
                                    <label>Less than Rs 100</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox"<?php if($_SESSION['items'][200])echo 'checked';?> name="<?php echo $heading;?>"  id="fprice" value="200">
                                    <label>Less than Rs 200</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox"<?php if($_SESSION['items'][300])echo 'checked';?> name="<?php echo $heading;?>"  id="fprice" value="300">
                                    <label>Less than Rs 300</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][400])echo 'checked';?>name="<?php echo $heading;?>"  id="fprice" value="400">
                                    <label>Less than Rs 400</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][500])echo 'checked';?>name="<?php echo $heading;?>"  id="fprice" value="500">
                                    <label>Less than Rs 500</label>
                                </li>
                            </ul>
                        </div>
						
                        <div class="rate">
                            <div class="fheader">
                                <h1>Rating</h1>
                            </div>
                             <ul>
                                <li>
                                    <input class="checkbox"  <?php if($_SESSION['items'][5])echo 'checked';?> type="checkbox" name="<?php echo $heading;?>" id="fprice" value="5">
                                    <label><span class="star-5 check">☆</span><span class="star-4 check">☆</span><span class="star-3 check">☆</span><span class="star-2 check">☆</span><span class="star-1 check">☆</span></label>
                                </li>
                                <li>
                                    <input class="checkbox" <?php if($_SESSION['items'][4])echo 'checked';?> type="checkbox" name="<?php echo $heading;?>"id="fprice" value="4">
                                    <label><span class="star-5 check">☆</span><span class="star-4 check">☆</span><span class="star-3 check">☆</span><span class="star-2 check">☆</span><span class="star-1">☆</span></label>
                                </li>
                                <li>
                                    <input class="checkbox" <?php if($_SESSION['items'][3])echo 'checked';?> type="checkbox" name="<?php echo $heading;?>"id="fprice" value="3">
                                    <label><span class="star-5 check">☆</span><span class="star-4 check">☆</span><span class="star-3 check">☆</span><span class="star-2">☆</span><span class="star-1">☆</span></label>
                                </li>
                                <li>
                                    <input class="checkbox" <?php if($_SESSION['items'][2])echo 'checked';?> type="checkbox"name="<?php echo $heading;?>" id="fprice" value="2">
                                    <label><span class="star-5 check">☆</span><span class="star-4 check">☆</span><span class="star-3">☆</span><span class="star-2">☆</span><span class="star-1">☆</span></label>
                                </li>
                                <li>
                                    <input class="checkbox" <?php if($_SESSION['items'][1])echo 'checked';?> type="checkbox"name="<?php echo $heading;?>" id="fprice" value="1">
                                    <label><span class="star-5 check">☆</span><span class="star-4">☆</span><span class="star-3">☆</span><span class="star-2">☆</span><span class="star-1">☆</span></label>
                                </li>
                            </ul>
                        </div>
						
						
                        <div class="brands">
                            <div class="fheader">
                                <h1>Brands</h1>
                            </div>
                            <ul>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][600])echo 'checked';?> id="fprice" name="<?php echo $heading;?>" value="600">
                                    <label>Brand A</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][700])echo 'checked';?> id="fprice" name="<?php echo $heading;?>"  value="700">
                                    <label>Brand B</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][800])echo 'checked';?> id="fprice" name="<?php echo $heading;?>"  value="800">
                                    <label>Brand C</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox" <?php if($_SESSION['items'][900])echo 'checked';?> id="fprice" name="<?php echo $heading;?>"  value="900">
                                    <label>Brand D</label>
                                </li>
                                <li>
                                    <input class="checkbox" type="checkbox"<?php if($_SESSION['items'][1000])echo 'checked';?> id="fprice" name="<?php echo $heading;?>"  value="1000">
                                    <label>Brand E</label>
                                </li>
                            </ul>
                        </div>
                     
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
    		
    	</div>
       
    </div>
    <footer>
        <div class="wrapper">
            <p>Copyright of Gogol's </p>
        </div>
    </footer>   
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.level-2').toggleClass('hidden');
            $('.level-3').toggleClass('hidden');
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
        $(".level-1 li").click(function(ev){
            ev.stopPropagation();
            $(this).find(".level-2").toggleClass("hidden");
        });
        $(".level-2 li").click(function(ev){
            ev.stopPropagation();
            $(this).find(".level-3").toggleClass("hidden");
        });
        $(".toggle").click(function(){
            $('.filter').toggleClass("hidden");
            $('.food').toggleClass('fdwide');
        });
		$('.checkbox').click(function(){
    		var value1=$(this).attr('value');
    		var value2=$(this).attr('name');
    		  //alert(value);
    		  
		    $.get('filter.php',{username:value1,name:value2},function(data){
                $('.grid').html(data);

            });
		});
		 	 
    </script>  
</body>
</html>