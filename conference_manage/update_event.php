<?php
	//similar to update user
	//Updates the event after clicking 'submit'
	require_once('DBQuery.php');
	require_once('get_user_props(1).php');
	//Grabs the event information from the webpage
	$start = $_POST['start'];
	$end = $_POST['end'];
	$location = $_POST['location'];
	$email = $_POST['speaker'];
	$paper = $_POST['paper'];
	$speaker_id = getUserProps($email,'id');
	//UPDATING THE EVENT
	//$query = update event with everything
	$update = new DBQuery($query);
	$update->execute_query();
	$update->close();
	//goes back to the current webpage
	//header(location:'webpage');
?>