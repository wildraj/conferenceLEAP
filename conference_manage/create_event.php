<?php
	require_once('DBQuery.php');
	require_once('get_conf_props.php');
	function createEvent($start_time,$end_time,$current,$location,$paper_id,$conf_id,$speaker_id){
		//$query = get start and end date of conference with conf_id
		//$time = new DBQuery($query);
		//$time->execute_query();
		//$time_result = $time->get_result();
		//time->close();
		/*if (!$time_result){
			notify that we can't find the conference 
		}
		else{
			$row = $result->fetch_assoc();
			$start = $row['start_date'];
			$end = $row['end_date'];
			//CHECKS IF THE CONFERENCE IS PLANNED FOR THAT SPECIFIC DATE
			if !$start<=$current<=$end then notify that the conference is not planned for that date
			else{
				$query = create event
				$create = new DBQuery($query);
				$create->execute_query();
				$create->close();
			}
		}*/
	}
?>