<?php
 include 'core/int.php';
 logged_in_redirect();
 include 'includes/overall/header.php';
 if(isset($_GET['success'])===true&&empty($_GET['success'])===true){
 ?>
 <h2>thank you we have activated your account</h2>
 <?php
 
 }
else if(isset($_GET['email'],$_GET['email_code'])===true)
{
$email=trim($_GET['email']);
$email_code=trim($_GET['email_code']);
if(email_exists($email)===false)
{
 $errors[]='opps,something went wrong,and we cannot activate your account';
 }
else if(activate($email,$email_code)===false){
$errors[]='We had problems activating your account';
}
if(empty($errors)===false){
?>
<h2>Ooops.....</h2>
<?php

echo output_errors($errors);
}else{
header('Location:activate.php?success');
exit();
}
else{
  header('Location:index.php');
  exit();
}
}
 include/overall/footer.php;
 
 ?>