 <?php
   // function getDetailsToTxtFile(){
    if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $array_data = [
        'username' => $username,
        'password' => $password
    ];

    $put_content = file_put_contents('Files/'. $array_data['username'] . ".json", json_encode($array_data));
    if($put_content == TRUE){
    	echo "Registration Successful";
    }else{
    	echo "Registrationwas not successful";
    }

}
?>
  
    
    