<?php
	require 'database.php';

	$pid = $_POST['pid'];
	$psid = $_POST['psid'];
//	$username = $_POST['subtype'];
	
	
	$id = $database->insert("sessions", [
		"pid" => $pid,
		"psid" => $psid,
		"created_at" => Medoo::raw('NOW()')
		]);
	echo $id;
?>