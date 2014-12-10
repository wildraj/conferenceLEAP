<?php
	session_start();
	if(!isset($_SESSION['role']) || !isset($_SESSION['email'])|| !isset($_SESSION['user_id'])){
		header('Location: /index.html');
	}
?>