<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Auth PHP</title>
</head>
<body>

<form action="register_process.php" method="post">
	Username: <input type="text" name="username" value="" placeholder="Username" />
	<br>
	<br>
	Password: <input type="text" name="password" value="" placeholder="Password" />
	<br>
	<br>
	<input type="submit" name="submit" value="Register">
</form>

   

</body>
</html>
