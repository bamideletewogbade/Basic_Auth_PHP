<html>
<head>
<title> Login Page</title>
</head>
<body>
<form action="login_process.php" method="post">
    
    Username:  <input type="text" name="username" >
    <br>
    <br>
    Password:  <input type="password" name="password">
    <br>
    <br>
    <input type="submit" name="login" value="Login">
    
     <a href="reset_password.php"><input type="submit" name="forgotPassword" value="Reset Password"></a>

      <p>
        Not yet registered?
 <a href="register.php">Click here to register</a>
 </p>
</form>
</body>
</html>