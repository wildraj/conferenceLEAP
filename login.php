<?php
	require_once("user/search_user.php");
	$email = $_POST["email"];
	$ans=searchUser($email); 
	if($ans==false){
		header('Location: index.html');
	}
	else{
		if($ans["password"]==$POST_["password"])
			header('Location: homepage.html');
		else{
			header('Location: index.html');
		}
	}
			
?>