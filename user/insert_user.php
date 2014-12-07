<?php
	//COMPLETE
	//INSERTS A NEW USER. GREAT TO USE FOR REGISTRATION.
	require_once('DBQuery.php');
	require_once('search_user.php');
	function insertUser($email,$fname,$lname,$pw){
		$search_result = searchUser($email);
		if ($search_result){
			echo 'Error: '.$email.' is already used. <br>';  
			exit();
		}
		$query = "INSERT INTO user (First_Name,Last_Name,Username,password,Role)
		VALUES ('".$fname."','".$lname."','".$email."','".md5($pw)."',7);";
		$insert = new DBQuery($query);
		$insert->execute_query();
		echo $email." inserted.";
	}
?>
