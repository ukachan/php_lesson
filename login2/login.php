<?php
include_once "sql.php";
$s = new sqler();
$s->initialize('login_data');

session_start();

$userId = $_POST['userid'];

if(!isset($_SESSION[$userId])){
    $_SESSION[$userId] = $userId;
    echo "ログインしました<br>";
    echo "ユーザーId：".$_SESSION[$userId]."<br>";
}else{
    echo "ログイン済です。ユーザーId：".$_SESSION[$userId]."<br>";
}