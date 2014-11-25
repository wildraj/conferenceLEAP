<?php
	require_once("user/search_user.php");
	$email = $_POST["email"];
	$ans=searchUser($email); 
	if($ans==false)
			
?>