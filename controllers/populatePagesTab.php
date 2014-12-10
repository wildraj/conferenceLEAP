<?php
	session_start();
	$role = $_SESSION['role'];
	switch($role){
		case 1:
			echo("<li><a href='admin.html'>Admin Page</a></li>")
			break;
	}
?>