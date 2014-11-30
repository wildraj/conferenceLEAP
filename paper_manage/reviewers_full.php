<?php
	//Before an editor adds in a new reviewer for the conference's paper,
	//this function checks the total reviewers would go over the max
	function reviewersFull($conf_id){
		/*$query = select the reviewers_max and reviewers_current from paper with $conf_id
		$fetch = new DBQuery($query);
		$fetch->execute_query();
		$result = $fetch->get_result();
		$row = $result->fetch_assoc();
		$max = $row['reviewers_max'];
		$current = $row['reviewers_current'];
		if ($max <= $current){
			return true;
		}
		return false;
		*/
	}

?>