<?php

	require_once("/var/www/html/phplibs/user/insert_user.php");
	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$pswd = $_POST["password"];
	$email = $_POST["FromEmailAddress"];
	if(insertUser($email, $fname, $lname, $pswd)){
		header('Location: /index.html');
	}
	else{
		header('Location: /account_creation.html');
	}


?>