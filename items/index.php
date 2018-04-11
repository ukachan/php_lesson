<?php
include_once "./class.php";

$items = array('one'=>'上着', 'two'=>'Tシャツ', 'three'=>'Gパン', 'four'=>'靴下', 'five'=>'靴');
$prices = array('one'=>5000, 'two'=>1000, 'three'=>9000, 'four'=>500, 'five'=>3000);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>items</title>
</head>
<body>
	<form action="./script.php" method="post">
		<select name="item-list">
			<?php foreach($items as $key => $value): ?>
			<?php echo("<option value='{$prices[$key]}'>$value</option>") ?>
			<?php endforeach; ?>
		</select>
		<input type="submit" value="確定">
	</form>
</body>
