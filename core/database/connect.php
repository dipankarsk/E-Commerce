<?php
$error='Sorry,Server is down';
mysql_connect('localhost','root','')or die($error);
mysql_select_db('shop')or die($error);
?>