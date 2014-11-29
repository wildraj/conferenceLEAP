<?php
	//assume that the conf_id is posted from front end
	//discount for certain users before registration
	//step 1 of conference registration
	require_once('DBQuery.php');
	require_once('get_user_props(1).php');
	require_once('update_user_conf.php');
	function discount($email, $conf_id, $price){
		$user_id = getUserProps($email, 'id');
		//$query = insert new email, conf_id, haspaid=false, $price
		$insert = new DBQuery($query);
		$insert->execute_query();
		$result = $insert->get_result();
		if (!$result){
			updateUserConf($email,$conf_id,'fee',$price);
		}
		$insert->close();
	}
?>