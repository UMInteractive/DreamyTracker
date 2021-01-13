<?php
	header('Access-Control-Allow-Origin: https://games.nerdlab.miami', false);
	require 'database.php';
	error_reporting(0);
	$pid = $_POST['pid'];
	$psid = $_POST['psid'];

	$username = $_POST['username'];
	
	if(!empty($pid) && !empty($psid) && !empty($username)) {
		$database->update("sessions", [
			"username" => $username], [
			"pid" => $pid,
			"psid" => $psid
		]);
		echo "Thank you.";
 	}
 	else {
 		echo "Player not found...";
 	}

?>