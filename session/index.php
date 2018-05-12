<?php
session_start();

$userid = '0707';
$username = 'komuro';
$urlparam = $userid . '&' . $username;

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $username;

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>session practice</title>
    </head>
    <body>
        <p><?php echo $_SESSION['count']; ?>回目の訪問</p>
        <p>続けるには<a href="nextpage.php?<?php echo htmlspecialchars($urlparam); ?>">ここをクリック</p>
    </body>
</html>