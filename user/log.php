<?php
	require_once('DBQuery.php');
	//This function searches for correct username and password, if found, then true; if not then it's invalid
	function logInValidation($email, $pw){
		//This query searches for the requested username with the requested password
		$query = "SELECT * FROM user
		WHERE email='".$email."' and password='".$pw."';";
		$validation = new DBQuery($query);
		$validation->execute_query();
		//Search for correct username with the correct password
		$valid = $validation->get_result();
		if (!$valid){
			return false;
		}
		//GET ALL USER INFORMATION?
		return true;
		
	}
	
?>