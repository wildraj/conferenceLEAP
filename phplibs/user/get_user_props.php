<?php
	//getUserProps
	require_once('search_user.php');
	require_once('DBQuery.php');
	function getUserProps($email,$column){
		//$query = select all from user table with email.
		$search_result = searchUser($email);
		if (!$search_result){
			echo 'Error: '.$email.' is not found. <br>';
			echo 'Please go back.';  
			exit();
		}
		$property = new DBQuery($query);
		$property->execute_query();
		$row = $property->get_result()->fetch_assoc();
		return $row[$column];
	}

?>