<!DOCTYPE html>
<html>
<head>
	<title>Login Processing</title>
</head>
<body>
<?php
if(isset($_POST['login'])){
	$username = $_POST['username'];
    $password = $_POST['password'];

    $array_data = [
        'username' => $username,
        'password' => $password
    ];

    $myfile = fopen("Files/". $username .".json", "r") or die("Unable to open file!");
    $get_contents = file_get_contents($myfile,json_decode($array_data));

    echo $get_contents;
	fclose($myfile);

}
?>

<!--<?php
if(isset($_POST['forgotPassword'])){

}
?>-->
</body>
</html>


