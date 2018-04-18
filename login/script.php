<?php
include_once "./class.php";

session_start();
if($_SESSION['user'] != null){
	header('Location: index.php');
}

// signupがpostされたときに下記を実行
if(isset($_POST['signup'])){
	
	$s = new sqler();
	if($s->initialize('login_data')){die('initialize: failure');}
	
	$username = $s->mysqli->real_escape_string($_POST['username']);
	$email = $s->mysqli->real_escape_string($_POST['mailaddress']);
	$password = $s->mysqli->real_escape_string($_POST['password']);
	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = "insert into data(username, email, password) values('$username','$email','$password')";
	
	$s->exe($query);
}



