<?php
	require_once('DBQuery.php');
	require_once('get_conf_props.php');
	//creates a new event with following constraints
	function createEvent($start_time,$end_time,$current,$location,$paper_id,$conf_id,$speaker_id){
		//$query = create event with all information about new event
		$create = new DBQuery($query);
		$create->execute_query();
		$create->close();
	}
?>