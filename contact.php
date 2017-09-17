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
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300|Josefin+Slab:100,300,400,600|Lobster+Two|Arbutus+Slab|Rokkitt:400,700|Niconne|Droid+Sans|PT+Serif|Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    
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
                <li class="on"><a href="contact.php">Contact</a></li>            
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
	$query=mysql_query("select items.image,items.product_name,items.brand_name,details.detail,details.description,details.rate from items inner join details on items.item_id=details.item_id where items.item_id='$id'");
	$row=mysql_fetch_assoc($query);
	
	?>
	<div class="content dynamic" id="contact">
    <div class="wrapper">
        <div id="envelope">
            <div class="top">
                <h1>Contact Us</h1>
                <p>Drop us a line sometime .. we'd love to hear from you</p>
            </div>
            <div class="bottom">
                <div class="body">
                    <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <label>Name:</label>
                                    </td>
                                    <td>
                                        <span><input class="conform" type="text" name="name"></span>
                                        <span class="errmssg" id="error2"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Email:</label>
                                    </td>
                                    <td>
                                        <span><input class="conform" type="text" name="name"></span>
                                        <span class="errmssg" id="error3"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div><label>Message:</label></div>
                                    </td>
                                    <td>
                                        <span><input class="conform" type="text" name="name"></span>
                                        <span class="errmssg" id="error3"></span>
                                        <span><input class="conform" type="text" name="name"></span>
                                        <span class="errmssg" id="error3"></span>
                                        <span><input class="conform" type="text" name="name"></span>
                                        <span class="errmssg" id="error3"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>    
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="next-2">Send</a>
                                    </td>
                                </tr>
                            </tbody>    
                        </table>
                </div>
                <div class="side">
                    <ul>
                        <li>
                            <i class="icon-phone"></i>
                            <span>1234567890</span>
                        </li>
                        <li>
                            <i class="icon-facebook"></i>
                            <span>www.facebook.com/gogol's</span>
                        </li>
                        <li>
                            <i class="icon-compass"></i>
                            <span>12/1 Something Street,</span><br>
                            <span style="padding:15%;">Kolkata - 700045</span>
                        </li>
                    </ul>
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

