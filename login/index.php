<?php
include_once "./script.php";

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<title>会員登録の練習</title>
	</head>
	<body>
		<fieldset>
			<legend>ユーザー名・パスワード入力</legend>
			<form name="login" method="post" action="./script.php">
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="your name"></input>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="mailaddress" placeholder="your mail address"></input>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="password" placeholder="your password"></input>
			</div>
			<button class="btn btn-default" type="submit" name="signup">会員登録</button>
		</fieldset>
	</body>
</html>
