<?php include 'core/database/connect.php';
error_reporting(0);
$email=$_GET['email'];
$query=mysql_query("select COUNT(c_id) from customers where email='$email'");
$result=mysql_result($query,0);
if($result==0)
{
}
else
echo 'Email exists';

?>