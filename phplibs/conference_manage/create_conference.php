<?php
	//activated when submit button is clicked on new conference page
	require_once('DBQuery.php');
	function createConference($name, $description, $start_date, $end_date, $cfp_created, $cfp_deadline){
		//$query = insert new conference with all information, id is incremental
		$insert = new DBQuery($query);
		$insert->execute_query();
		$insert->close();
	}
?>