<?php
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=output.csv");
	header("Pragma: no-cache");
	header("Expires: 0");

	require 'database.php';



$events = $database->select("events", [
	// Here is the table relativity argument that tells the relativity between the table you want to join.
 
	// The row author_id from table post is equal the row user_id from table account
//	"[>]player" => "qualtrics_id",
 
	// The row user_id from table post is equal the row user_id from table album.
	// This is a shortcut to declare the relativity if the row name are the same in both table.
	"[>]event_type" => ["event_id" => "id"]
 
	], [
		"events.qualtrics_id",
		"events.belief_id",
		"events.dialog_id",
		"events.subtype",
		"events.character_id",
		"event_type.name",
		"events.days",
		"events.risk",
		"events.tan",
		"events.attractiveness",
		"events.created_at"
		], 
	[
//	"post.user_id" => 100,
	"ORDER" => "events.created_at ASC"
//	"LIMIT" => 50
	]);

	echo "qualtrics_id,belief_id,dialog_id,subtype,character_id,event,days,risk,tan,attractiveness,timestamp\n";
	foreach($events as $event) {
		echo implode($event, ",");
		echo "\n";
		
	}
?>