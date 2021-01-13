<?php
		
//Set Access-Control-Allow-Origin with PHP
header('Access-Control-Allow-Origin: https://games.nerdlab.miami', false);
	require 'database.php';
	error_reporting(0);
	$pid = $_POST['pid'];
	$psid = $_POST['psid'];
//	$username = $_POST['subtype'];
	
	if(!empty($pid) && !empty($psid)) {
		
		$id = $database->insert("sessions", [
			"pid" => $pid,
			"psid" => $psid,
			"created_at" => Medoo::raw('NOW()')
			]);
		echo $id;
	}
	else {
		echo "Come again?";
	}
?>