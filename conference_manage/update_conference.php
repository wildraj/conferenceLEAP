<?php
	require_once('DBQuery.php');
	//similar to update user
	function updateConf($conf_id,$column,$new_data){
		//$query = update $column with $new_data in table 'conference'
		$update = new DBQuery($query);
		$update->execute_query();
		$update->close();
	}
?>