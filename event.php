<?php
	require 'database.php';

	$player_id = $_POST['player_id'];
	$belief_id = $_POST['belief_id'];
	$path = $_POST['path'];
	$elapsed = $_POST['time_elapsed'];
	
	$id = $database->insert("events", [
		"qualtrics_id" => $player_id,
		"belief_id" => $belief_id,
		"dialog_id" => $path,
		"event_id" => $elapsed,
		]);
var_dump($database->error());
	echo $id;
?>