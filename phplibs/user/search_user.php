<?php
	require_once('/var/www/html/phplibs/DBQuery.php');
	$query = "";
	function searchUser($email){ //bool
		//COMPLETE
		//Searches for the user with the certain email. If the user is found, then the query
		//results are returned. If not, then function becomes false.
		$query = "SELECT * FROM user WHERE email = '".$email."';";
		//$query = "SELECT * FROM user WHERE email = 'rsp10a@acu.edu';";
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
