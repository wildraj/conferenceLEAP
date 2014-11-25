<?php
	require_once('DBQuery.php');
	//Get conf_id with the fetchConference function
	function deleteEvent($start, $end, $conf_id){
		//$query = delete event with specific start and end time, and conf_id
		$delete = new DBQuery($query);
		$delete->execute_query();
		$delete->close();
	}
?>