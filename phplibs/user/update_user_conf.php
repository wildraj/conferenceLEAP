<?php
	require_once('DBQuery.php');
	function updateUserConf($email,$conf_id,$column,$data){
		$query = //update user_conf when email=$email and conf_id $conf_id,
				//set $column with $new_data
		$update = new DBQuery($query);
		$update->execute_query();
	}
?>