<?php
include_once "./script.php";
include_once "./class.php";

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ログイン画面の練習</title>
	</head>
	<body>
		<fieldset>
			<legend>ユーザー名・パスワード入力</legend>
			<form name="login" method="post" action="./script.php">
			username: <input type="text" name="username"></input>
			password: <input type="text" name="password"></input>
			<input type="submit" name="submit">
	</body>
</html>
