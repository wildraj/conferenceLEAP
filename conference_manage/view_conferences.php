<?php
	require_once('DBQuery.php');
	function viewConferences(){
		//$query = get all conferences where the start_date > current_date
		$view = new DBQuery($query);
		$view->execute_query();
		$result = $view->get_result();
		return $result;
	}
?>