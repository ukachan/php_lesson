<?php
include_once "./class.php";

$iPrice = $_POST['item-list'];

$c = new calc();
$result = $c->cResult($iPrice);

echo $result;
