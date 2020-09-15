<?php
	require 'database.php';

	$player_id = $_POST['player_id'];
	$belief_id = $_POST['belief_id'];
	$path = $_POST['path'];
	$elapsed = $_POST['time_elapsed'];
	
	$id = $database->insert("events", [
		"player_id" => $player_id,
		"belief_id" => $belief_id,
		"path" => $path,
		"elapsed" => $elapsed,
		]);
var_dump($database->error());
	echo $id;
?>