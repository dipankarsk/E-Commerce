<?php
$connect_error='Sorry,we are experiencing connection problems.';
mysql_connect('localhost','root','')or die($connect_error);
mysql_select_db('dolnan5_dip')or die($connect_error);
?>