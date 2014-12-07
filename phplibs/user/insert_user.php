<?php
	require_once('/var/www/html/phplibs/DBQuery.php');
	require_once('/var/www/html/phplibs/user/search_user.php');
	function insertUser($email,$fname,$lname,$pw){
		$search_result = searchUser($email);
		if ($search_result){
			echo 'Error: '.$email.' is already used. <br>';  
			return false;
		}
		$query = "INSERT INTO user (first_name,last_name,email,password,role)
		VALUES ('".$fname."','".$lname."','".$email."','".$pw."',7);";
		$insert = new DBQuery($query);
		$insert->execute_query();
		echo $email." inserted.";
		return true;
	}
?>