 <?php
   // function getDetailsToTxtFile(){
    if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $array_data = [
        'username' => $username,
        'password' => $password
    ];

    file_put_contents('Files/'. $array_data['username'] . ".json", json_encode($array_data));
}
?>
  
    
    