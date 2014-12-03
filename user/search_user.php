<?php
	//COMPLETE
	//Searches for the user with the certain email. If the user is found, then the query
	//results are returned. If not, then function becomes false.
	require_once('DBQuery.php');
	$query = "";
	function searchUser($email){ //bool
		$query = "SELECT * FROM user WHERE Username = '".$email."';";
		$search = new DBQuery($query);
		$search->execute_query();
		$result = $search->get_result();
		$row_num = $result->num_rows;
		if ($row_num !=  1){
			return false;
		}
		$search->close();
		return $result;
	}
?>
