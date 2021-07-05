<?php
session_start();
include_once 'config.php';
if(isset($_POST['submit']))
{
    $email1 = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM user_detail where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result); 
	$email2=$row['email'];
	$email_id=$row['email'];
  $password = $row['password'];
  $name = $row['name'];
	$id = $row['id'];
	
  if($email1==$email2) {
    $to = $email_id;
    $txt = "Hi, $name. your password is $password";
    $headers = "From: foodiekitchen876@gmail.com@gmail.com\r\n";
    $subject = "Reset Password";
     $msg=mail($to,$subject,$txt,$headers);
  } 
				else{
					echo 'invalid userid';
				}
}
//echo phpinfo();
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body> 