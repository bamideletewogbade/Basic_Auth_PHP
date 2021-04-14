<!DOCTYPE html>
<html>
<head>
	<title>Login Form Processing</title>
</head>
<body>
<?php
function checkDetailsInTxtFile(){
    if(isset($_POST['username']) && isset($_POST['password'])) {
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$file_read = file('user_details.txt');
    	
		}
    }
    checkDetailsInTxtFile();
?>
</body>
</html>

