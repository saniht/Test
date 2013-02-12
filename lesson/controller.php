<?php
header("Content-Type: text/html; charset=utf-8");
require_once "model62.php";
if (isset($_POST["addcomment"]))    addComment($_POST["name"], $_POST["comment"]);
$array = transformComentsToArray();
require_once "view62.php";
//print_r($array);
?>
