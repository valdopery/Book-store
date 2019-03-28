<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>
<link rel="stylesheet" type="text/css" href="login.css">       
   
</head>		
<body>
    <div class="loginbox">
     
    <h1>Login here</h1>
    <form method="post" action="validation.php">
        <p>User Id</p>
        <input type="text" name="username" placeholder="Enter Id" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" name="submit" value="Login">
        
        <a href="signup.php"><b>Create new account </b></a>
        </form>
    </div>
</body>
</html>