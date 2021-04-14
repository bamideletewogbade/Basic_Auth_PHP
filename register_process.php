<!DOCTYPE html>
<html>
<head>
	<title>Forms Registration Processing</title>
</head>
<body>
	
     <?php
    function getDetailsToTxtFile(){
    if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n";
    $open_file = fopen("user_details.txt", "a+");
    fwrite($open_file, $data);
    fclose($open_file);
    }
}
    getDetailsToTxtFile();
    ?>

</body>
</html>