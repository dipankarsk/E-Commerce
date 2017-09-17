<?php include'core/database/connect.php';?>
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
    <link href="css/pace-theme-loading-bar.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600|Lobster+Two|Arbutus+Slab|Rokkitt:400,700|Niconne|Droid+Sans|PT+Serif|Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
      <script src="jquery/lightbox.js"></script>
    <script src="jquery/prefixfree.min.js"></script>
    <script src="jquery/hoverIntent.minified.js"></script>
    <script src="jquery/nprogress.js"></script>
    <script src="jquery/wow.min.js"></script>
    <script src="jquery/primary.js"></script>
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script src="jquery/jquery-migrate-1.2.1.min.js"></script>
    <script>
        new WOW().init();
    </script>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="js\/1.7.2.jquery.min"><\/script>')</script>

    <script src="jquery/pace.js"></script>
</head>
<body>
    <div class="header up home">
        <div class="wrapper">
            <div class="logo"></div>
            <div class="pull">
                <div class="pull-cont">
                    <span></span><br>
                    <span style="padding:37%;"> Menu</span>
                </div>
            </div>   
                    
            <form class="search">
                <input type="text" name="header_search" id="common_search-input" class="autosuggest" placeholder="Search">     
                <div class="dropdown">
                    <ul class="result"><ul>
                </div>
            </form>
            
            <ul class="nav">
                <li class="on"><a href="index.php">Home</a></li>
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
    <div class="content static">   
        <div class="section banner">
            <div id="slides" class="slider">
                <div class="slides-container">
                  <a href="items.php"><img src="img/slider1.jpg" alt="Cinelli"></a>
                  <a href="items.php"><img src="img/slider2.jpg" alt="Surly"></a>
                  <a href="items.php"><img src="img/slider3.jpg" alt="Cinelli"></a>
                  <a href="items.php"><img src="img/slider4.jpg" alt="Affinity"></a>
                  <a href="items.php"><img src="img/slider5.jpg" alt="Affinity"></a>
                </div>
                <nav class="slides-navigation">
                  <a href="#" class="next"><i class="icon-circle-right"></i></a>
                  <a href="#" class="prev"><i class="icon-circle-left"></i></a>
                </nav>
            </div>
        </div>
        <div class="section products">
            <div class="wrapper">
                <div class="latest">
                    <div class="grid">
                        <div class="grid p1">
                            <a></a>
                            <div class="rows">
                                <div class="row row-1">
                                    <h1>Deal of the Day</h1>
                                </div>
                                <div class="row row-2">
                                    <p>Details about the product</p>
                                </div>  
                                <div class="row row-3">
                                    <p>Sub-Details about the product</p>
                                </div>  
                            </div>
                        </div>
                        <a href=""><div class="grid p2"></div></a>
                        <a href=""><div class="grid p3"></div></a>
                        <div class="grid p4">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid p5">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured">
                    <div class="grid">
                        <a href="#">
                            <h3>Featured Deals</h3>
                            <p>Hand selected by our creative director</p>
                        </a>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="trending">
                    <div class="grid">
                        <a href="#">
                            <h3>Trending</h3>
                            <p>Shop from the latest trending collections</p>
                        </a>
                        <div class="grid p6">
                            <div class="container">
                                <a href="">
                                    <div class="card">
                                        <figure class="front"></figure>
                                        <figure class="back">
                                            <div class="image"></div>
                                            <div class="desc">
                                               <h1>Product Name</h1> 
                                               <span>Buy Now</span>
                                               <h2>1kg @ Rs 50</h2>
                                           </div>
                                        </figure>
                                    </div>
                                </a>
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
    <!--ATTENTION: include this jquery snippet in every file too-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jquery/jquery.easing.1.3.js"></script>
    <script src="jquery/jquery.animate-enhanced.min.js"></script>
    <script src="jquery/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(function() {
          $('#slides').superslides({
            hashchange: false,
            play: 2000,
            inherit_height_from: '.banner'
          });
          $(document).ready(function() {
                $('body').show();
                if($('.header').hasClass('up')) {
                    $('.pull-cont span:nth-child(1)').text("The Sweet Tooth's");
                }
                else{
                    $('.pull-cont span:nth-child(1)').text("Hide");   
                }
                //$('#slides').superslides('stop');
                var isOpen = false;
                $('.dropdown').addClass('hidden');
                $('.pull').click(function(){
                    $('.header').toggleClass('up');
                    if($('.header').hasClass('up')) {
                        $('.pull-cont span:nth-child(1)').text("The Sweet Tooth's");
                        $('.pull-cont span:nth-child(1)').css("padding", '15%');   
                    }
                    else{
                        $('.pull-cont span:nth-child(1)').text("Hide");   
                        $('.pull-cont span:nth-child(1)').css("padding", '40%');   
                    }
                });
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
          $('#slides').on('mouseenter', function() {
            $(this).superslides('stop');
            console.log('Stopped')
          });
          $('#slides').on('mouseleave', function() {
            $(this).superslides('start');
            console.log('Started')
          });
        });
        $(".container").hover(function(){
            $(this).find(".card").toggleClass('flipped');
            $(this).parent().toggleClass('cardhover');
        },function(){
            $(this).find(".card").toggleClass('flipped');
            $(this).parent().toggleClass('cardhover');
        });
        $(".nav li:nth-child(3)").click(function(){
            $('.second').toggleClass("second_active");
        });
    </script>  
</body>
</html>