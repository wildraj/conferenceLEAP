<?php
	require_once('DBQuery.php');
	require_once('search_user.php');
	//creates a new user, admin's job?
	function insertUser($email,$fname,$lname,$pw){
		$search_result = searchUser($email);
		if ($search_result){
			echo 'Error: '.$email.' is already used. <br>';  
			exit();
		}
		$query = "INSERT INTO user (fname,lname,email,password,role)
		VALUES ('".$fname."','".$lname."','".$email."','".$pw."','7');";
		$insert = new DBQuery($query);
		$insert->execute_query();
		echo $email." inserted.";
	}
?>