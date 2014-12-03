<?php
	//Fetches a requested user property from the database
	//Columns: 'User_ID', 'First_Name', 'Last_Name', 'Username', 'password', 'Role'
	require_once('search_user.php');
	require_once('DBQuery.php');
	function getUserProps($email,$column){
		$query = "SELECT ".$column." FROM user WHERE Username='".$email."';";
		$search_result = searchUser($email);
		if (!$search_result){
			echo 'Error: '.$email.' is not found. <br>';
			echo 'Please go back.';  
			exit();
		}
		$property = new DBQuery($query);
		$property->execute_query();
		$row = $property->get_result()->fetch_assoc();
		$property->close();
		return $row[$column];
	}

?>
