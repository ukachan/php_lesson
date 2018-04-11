<?php
	session_start();

	$syouhin = $_POST['syouhin'];
	$_SESSION['syouhin'] = $syouhin;
	print("次の商品を登録しました<br>");
	print("商品:$syouhin<br>");
?>
<a href="./regist_check.php">商品の確認</a>
