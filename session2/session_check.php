<?php
session_start();
$_SESSION['profile'] = $_POST['user_name'];
if(isset($_POST['user_name'])){
    $profile = $_SESSION['profile'];
}
if(isset($_POST['cart'])){
    $cart = $_SESSION['cart'];
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>session</title>
    </head>
    <body>
        <?php if(isset($_SESSION)): ?>
        <p>こんにちは、<?php echo $profile; ?>さん</p>
        <?php endif; ?>
    </body>
</html>