<?php
	require 'database.php';

	$id = $_POST['id'];
	$username = $_POST['username'];
	
	
	$id = $database->update("sessions", [
		"pid" => $pid,
		"psid" => $psid
		]);
	echo $id;


$database->update("session", [
	"username" => $username], [
	"id" => $id
]);
 

?>