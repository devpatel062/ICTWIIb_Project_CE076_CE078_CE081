<?php
session_start();
include_once 'config (1).php';
if(isset($_POST['submit']))
{
    $email1 = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM user_detail where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result); 
	$email2=$row['email'];
	$email_id=$row['email'];
	$id = $row['id'];
	
  if($email1==$email2) {
    $to = $email_id;
    $txt = "Hi, $email1. Click http://localhost/DP/Project/reset_password.php?id=$id to reset the password";
    $headers = "From: pateldj0077@gmail.com\r\n";
    $subject = "Reset Password";
     $msg=mail($to,$subject,$txt,$headers);
    if($msg){
      $_SESSION['msg'] = 'password link sent';
    }
    else{
    echo "mail was not sent!!";			}
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