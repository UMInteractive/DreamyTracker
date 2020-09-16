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
		"events.player_id",
		"events.npc",
		"events.belief_id",
		"events.path",
		"events.elapsed",
		"events.created_at"
		], 
	[
//	"post.user_id" => 100,
	"ORDER" => "events.created_at ASC"
//	"LIMIT" => 50
	]);

	echo "player_id,belief_id,path,elapsed,timestamp\n";
	foreach($events as $event) {
		echo implode($event, ",");
		echo "\n";
		
	}
?>