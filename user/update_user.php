<?php
	require_once('DBQuery.php');
	require_once('search_user.php');
	function updateUser($email,$column,$new_data){
		$search_result = searchUser($email);
		if (!$search_result){
			echo 'Error: '.$email.' is not found. <br>';
			echo 'Please go back.';  
			exit();
		}
		$query = "UPDATE user 
			SET ".$column."='".$new_data."'
			WHERE email = '".$email."';";
		$update = new DBQuery($query);
		$update->execute_query();
		$update->close();
	}
?>