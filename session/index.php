<?php
	session_start();
	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>session</title>
</head>
<body>
	<div>商品登録</div>
	<form action="./regist.php" method="post">
		<table>
			<tbody><tr>
				<td>商品名</td>
				<td><input type="text" name="syouhin"></td>
				<td>
					<input type="submit" value="登録">
				</td>
			</tr></tbody>
		</table>
	</form>
</body>
</html>
