<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q = "select * from login where username='$username' && password='$password'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
	$_SESSION['username'] = $username;
	header('location:payment.php');
	
}
else{
	echo "Invalid login details";
	header('location:login.php');
}
?>
