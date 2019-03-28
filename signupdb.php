<?php
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q = "insert into login (username,password) values ('$username','$password')";
$result = mysqli_query($con,$q);

if($result){
	
	header('location: checkout.php');
	
	
}
else{
	echo "insertion failed";
}

?>