<?php
	require_once('DBQuery.php');
	require_once('search_user.php');
	function deleteUser($email){
		$search_result = searchUser($email);
		if (!$search_result){
			echo 'Error: '.$email.' is not found. <br>';
			echo 'Please go back.';  
			exit();
		}
		$query =
		"DELETE FROM user
		WHERE email = '".$email."';";
		$delete = new DBQuery($query);
		$delete->execute_query();
	}
?>