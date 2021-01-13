<?php
	require 'database.php';

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