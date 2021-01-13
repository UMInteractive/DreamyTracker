<?php
	require 'database.php';
	error_reporting(0);
	$id = $_POST['id'];
	$username = $_POST['username'];
	
	if(!empty($id) && !empty($username)) {
		$database->update("session", [
			"username" => $username], [
			"id" => $id
		]);
		echo "Thank you.";
 	}
 	else {
 		echo "Player not found...";
 	}

?>