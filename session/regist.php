<?php
	session_start();
	var_dump($_SESSION);
	foreach($_SESSION as $key => $value){
		echo($key.'|'.$value);
	}

	// $syouhin = $_POST['syouhin'];
	// array_push($_SESSION['syouhin'], $syouhin);
	// $_SESSION['date'] = date( 'Y年m月d日' );
	// print("次の商品を登録しました<br>");
	// print("商品：$syouhin<br>");
	// print("登録日：{$_SESSION['date']}<br>");
?>
<a href="./regist_check.php">商品の確認</a>
