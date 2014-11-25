<?php
	function showRole($roleId){
		switch ($roleID){
			case 1:	//admin
				echo ("<option value=2>planner</option>");
				break;
			case 2: //conference planner
				echo ("<option value=3>planner assistant</option>");
				echo ("<option value=4>editor</option>");
				break;
			case 4: //editor
				echo ("<option value=5>reviewer</option>");
				echo ("<option value=7>general</option>");
				break;
		}
	}
?>