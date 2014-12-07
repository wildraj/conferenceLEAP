<?php
	//assume that the conf_id is posted from front end
	//step 3 of conference registration
	//use paypal
	//talk to jon about this one
	//$payment = fee - price
	require_once('DBQuery.php');
	require_once('get_user_props(1).php');
	require_once('update_user_conf.php');
	function pay($email, $conf_id, $price){
		$user_id = getUserProps($email, 'id');
		//$query = insert new email, conf_id, haspaid=false, $price
		$insert = new DBQuery($query);
		$insert->execute_query();
		$result = $insert->get_result();
		if (!$result){
			updateUserConf($email,$conf_id,'fee',$price);
		}
		if ($price === 0){
			updateUserConf($email,$conf_id,'hasPaid','true');
		}
	}
?>