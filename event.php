<?php
	require 'database.php';

	$qualtrics_id = $_POST['qualtrics_id'];
	$event_id = $_POST['event_id'];
	$event_subtype = $_POST['subtype'];
	
	if ($_POST['belief_id']) {
		$belief_id = $_POST['belief_id'];
	}
	else {
		$belief_id = NULL;
	}

	if ($_POST['dialog_id']) {
		$dialog_id = $_POST['dialog_id'];
	}
	else {
		$dialog_id = NULL;
	}
	
	if ($_POST['character_id']) {
		$character_id = $_POST['character_id'];
	}
	else {
		$character_id = NULL;
	}
	
	$days = $_POST['days'];
	$risk = $_POST['risk'];
	$tan = $_POST['tan'];
	$attractiveness = $_POST['attractiveness'];
	
	$id = $database->insert("events", [
		"qualtrics_id" => $qualtrics_id,
		"belief_id" => $belief_id,
		"dialog_id" => $dialog_id,
		"event_id" => $event_id,
		"subtype" => $event_subtype,
		"character_id" => $character_id,
		"days" => $days,
		"risk" => $risk,
		"tan" => $tan,
		"attractiveness" => $attractiveness
		]);
var_dump($database->error());
	echo $id;
?>