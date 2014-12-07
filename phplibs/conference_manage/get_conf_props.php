<?php
	//getUserProps
	require_once('DBQuery.php');
	function getConfProps($conf_id,$column){
		//$query = select all from conference with $conf_id
		$property = new DBQuery($query);
		$property->execute_query();
		$row = $property->get_result()->fetch_assoc();
		return $row[$column];
	}

?>