<?php
	function passwordReset(){
    if(isset($_POST['password']) && isset($_POST['cpassword'])) {
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


?>