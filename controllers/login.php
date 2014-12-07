<?php
	require_once("/var/www/html/phplibs/user/search_user.php");
	$email = $_POST["email"];
	$ans=searchUser($email); 
	if($ans==false){
		header('Location: /indebx.html');
	}
	else{
		if($ans["password"]==$_POST["password"])
			header('Location: /homepage.html');
		else{
			header('Location: /indeax.html');
		}
	}
			
?>