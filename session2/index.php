<?php
session_start();
$_SESSION = array();
$session_name = session_name();
if(isset($_COOKIE[$session_name]) === true){
    setcookie($session_name, '', time() - 3600);
}
session_destroy();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>session</title>
    </head>
    <body>
        <form action="session_check.php" method="post">
            <input type="text" name="user_name" placeholder="your name">
            <input type="submit" value="Log In">
        </form>
    </body>
</html>