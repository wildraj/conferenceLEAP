<?php
	session_start();
	$role = $_SESSION['role'];
	switch($role){
		case 1: //admin
			echo("<li><a href='admin.php'>Admin Page</a></li>");
			break;
		case 2: //planner
			echo("<li><a href='planner.php'>Planner Page</a></li>");
			break;
		case 3: //assistant
			echo("<li><a href='assistant.html'>Admin Page</a></li>");
			break;
		case 4: //editor
			echo("<li><a href='editor.html'>Admin Page</a></li>");
			break;
		case 5: //reviewer
			echo("<li><a href='reviewer.html'>Admin Page</a></li>");
			break;
		case 6: //author
			echo("<li><a href='speaker.html'>Admin Page</a></li>");
			break;
		case 7: //public
			
			break;

	}
?>