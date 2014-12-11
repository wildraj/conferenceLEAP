<?php
	session_start();
	if(!isset($_SESSION['role']) || !isset($_SESSION['email'])|| !isset($_SESSION['userid'])){
		header('Location: /index.html');
	}
?>