<?php 
include 'core/int.php';
protect_page();

if(empty($_POST)===false)
{
 $required_fields=array('current_password','password','password_again');
 
 foreach($_POST as $key=>$value)
{
  if(empty($value)&& in_array($key,$required_fields)===true)
  {
  $errors[]='Fields marked with an asteric must be filled';
  break;
  }
}
 if(md5($_POST['current_password'])===$user_data['password'])
 {
if(trim($_POST['password'])!== trim($_POST['password_again']))
{
$errors[]='Your new passwords don not match';
}
else if(strlen($_POST['password'])<6){
 $errors[]='Your password must be atleast 6 characters';
}

 }
 else{
 $errors[]='your current password do not match';
 }

 }

include 'includes/overall/overallheader.php';
?>
		<h1>Change Password</h1>
		<?php
		if(isset($_GET['success'])&& empty($_GET['success']))
{
echo'Your password has been changed successfully';
}
else
{
		if(empty($_POST)===false&&empty($errors)===true)
		{
		change_password($session_user_name,$_POST['password']);
	     header('Location:changepassword.php?success');
		}
		else if(empty($errors)===false)
		{
         echo output_errors($errors);
		}
		?>
		<form action=""method="post">
		<ul>
		    <li>
		    Current Password*:<br>
			  <input type="password" name="current_password"/>
		       </li>
		    <li>
		     New   Password*:<br>
			  <input type="password" name="password"/>
		        </li>
				<li>
		     New   Password Again*:<br>
			  <input type="password" name="password_again"/>
		        </li>
		    <li>
		    <input type="submit" value="change"/>
		         </li>
		   </ul>
		   </form>
<?php
}
include 'includes/overall/overallfooter.php';
?>
