<!DOCTYPE html>
<html>
<head>
	<title>Login Form Processing</title>
</head>
<body>
<?php 
    $myFile = "user_details.txt";
    $contents = file_get_contents($myFile);
    $contents = explode("\n", $contents);

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $_POST['username'] && $password == $_POST['password']){
        echo "Login Successful";


   }
    else{
        echo "Please verify your username and password.";
    }

    ?>
</body>
</html>

