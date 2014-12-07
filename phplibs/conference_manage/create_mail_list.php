<?php
	require_once('DBQuery.php');
	function createMailList($conf_id, $address){
		//address is array
		$query = '';
		$insert = new DBQuery($query);
		foreach($address as &$value){
			//$query = insert new address and conf_id into mailto. 
			//id is incremental
			$insert->set_query($query);
			$insert->execute_query();
		}
		$insert->close();
	}
?>