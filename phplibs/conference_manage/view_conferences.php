<?php
	require_once('DBQuery.php');
	//returns all future conferences with all their information
	function viewConferences(){
		//$query = get all conferences where the start_date > current_date
		$view = new DBQuery($query);
		$view->execute_query();
		$result = $view->get_result();
		//gets all rows from db
		return $result;
	}
?>