<?php
	//step 2 of conference registration
	//fetches the fee for the conference
	require_once('DBQuery.php');
	require_once('get_user_props(1).php');
	require_once('get_conf_props.php');
	function getConfFee($conf_id,$email){
		$fee = 0;
		$user_id = getUserProps($email, 'id');
		//$query = select all with $conf_id and $email
		$search = new DBQuery($query);
		$search->execute_query();
		$result = $search->get_result();
		if (!$result){
			$fee = getConfProps($conf_id,'cost'); 
		}
		else{
			$row = $result->fetch_assoc();
			$fee = $row['fee'];
		}
		return $fee;
	}
?>