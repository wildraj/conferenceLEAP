<?php
//CHANGES
//MAKE SURE TO MAKE A FUNCTION TO FETCH ALL REQUESTED MAILTO ID'S FROM MAILTO TABLE
	require_once('DBQuery.php');
	function createMailList($conf_id, $mailto_id, $flyer_ref){
		//mailto_id is an array
		$query = '';
		$insert = new DBQuery($query);
		foreach($address as $value){
			//$query = insert new data mailto_id,flyer_reference,and conf_id into conf_mailto table. 
			//id is incremental
			$insert->set_query($query);
			$insert->execute_query();
		}
		$insert->close();
	}
?>