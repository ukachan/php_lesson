<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$cookie = $_COOKIE['PHPSESSID'];

echo($userid . $username . '/' . $cookie);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>nextpage</title>
    </head>
    <body>
        <p>リセットするには<a href="./unset.php">ここをクリック</a>
    </body>
</html>