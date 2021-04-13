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
    $data = "Username: " . $username . "\n" . "Password: " . $password;
    $filename = $username ."txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
   // $com_file = file_put_contents($ret, $filename);
    if($ret === false) {
        die('There was an error writing this folder');
    }
    else {
        echo "File successfully saved";
        //echo readfile("$filename");

    }
    }
    else {
       die('no post data to process');
    }
    }
    getDetailsToTxtFile();
    ?>

</body>
</html>