<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>
<link rel="stylesheet" type="text/css" href="signup.css">       
   
</head>		
<body>
    <div class="loginbox">
     
    <h1>Register here</h1>
    <form method="post" action="signupdb.php">
        <p>Email</p>
        <input type="text" name="username" placeholder="Enter Id" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter password" required>
		<p>Mobile</p>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="submit" name="submit" value="Register">
      
        </form>
    </div>
</body>
</html>