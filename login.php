<?php
require 'conn.php';
// checking the user

if(isset($_POST['login'])){
	session_start();
	if(empty($_POST['username'])){
//	$_SESSION['errors']['username']="Username is missing";
}
$username = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$sel_user = "SELECT * FROM dentist WHERE Username='$username' AND Password=md5('$pass')";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0){
//$_SESSION['username']=$username;
$loginmsg="Login Successfully.";
/*echo “<script>window.open(‘home.php’,’_self’)</script>”;*/
echo "<script type='text/javascript'>window.location = 'home';alert('$loginmsg');</script>";

}
else {
	$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>window.location = 'index';alert('$message');</script>";
}
}
?>