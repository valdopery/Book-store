<?php
session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>
	<link rel="stylesheet" type="text/css" href="address.css" >
</head>
<body>
	<form method="post" action="summary.php">
	<div class="box">
	<h2 style="font-family:courier;">Enter Address</h2>
	<input type="text" name="name" placeholder="Name" required /><br><br>
	<input type="text" name="pincode" placeholder="Pin-code" required /><br><br>
	<input type="text" name="address" placeholder="Address" required /><br><br>
	<input type="text" name="landmark" placeholder="Landmark" /><br><br>
	<input type="text" name="city" placeholder="City" required /><br><br>
	<input type="text" name="state" placeholder="State" required /><br><br>
	<input type="text" name="email" placeholder="Email" required /><br><br>
	<input type="text" name="phone" placeholder="Phone" required /><br><br>
	 
	
	<a href="home.php" class="btn" >Cancel</a>
	<input type="submit" value="Place Order">
	
	</div>
	
	
	
	
	
	
	</form>
</body>
</html>
