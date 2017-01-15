<?php
	require 'database.php';

	$preference = "M";
	$qualtrics_id = $_POST['qualtrics'];
	$skin = $_POST['skin'];
	$hair = $_POST['hair'];
	$face = $_POST['face'];
	$ears = $_POST['ears'];
	$eyes = $_POST['eyes'];
	$iris = $_POST['iris'];
	$mouth = $_POST['mouth'];
	$nose = $_POST['nose'];

	$last_user_id = $database->insert("player", [
	"preference" => $preference,
	"qualtrics_id" => $qualtrics_id,
	"skintone" => $skin,
	"haircolor" => $hair,
	"face" => $face,
	"ears" => $ears,
	"eyes" => $eyes,
	"iris" => $iris,
	"mouth" => $mouth,
	"nose" => $nose
]);
var_dump($database->error());
	echo $last_user_id;
?>