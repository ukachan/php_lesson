<?php
	session_start();
	var_dump($_SESSION);
	print("登録済：");
	print("{$_SESSION['syouhin']}<br>");
	print("登録日：");
	print("{$_SESSION['date']}<br>");
	// $arr = array();
	// array_push($arr, $_SESSION['syouhin']);
	// foreach($arr as $value){
	// 	print("登録済：");
	// 	print($value."<br>");
	// }

?>
<a href="./index.php">トップへ戻る</a>
