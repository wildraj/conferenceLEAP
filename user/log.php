<?php
	require_once('DBQuery.php');
	function logInValidation($email, $pw){
		//This query searches for the requested username with the requested password
		$query = "SELECT * FROM user WHERE Username='".$email."' AND password='".$pw."';";
		$validation = new DBQuery($query);
		$validation->execute_query();
		//Search for correct username with the correct password
		$valid = $validation->get_result();
		if ($valid->num_rows != 1){
			return false;
		}
		//GET ALL USER INFORMATION?
		return true;
	}
?>
