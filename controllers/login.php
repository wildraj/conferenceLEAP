<?php
	echo("one");
	session_start();	
	echo("two");
	require_once("/var/www/html/phplibs/DBQuery.php");
	echo("three");
	//This function searches for correct username and password, if found, then true; if not then it's invalid
	
		//This query searches for the requested username with the requested password
		
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$query = "SELECT * FROM user WHERE `email`= '".$email."' AND `password`= '".$password."';";
		$valid = new DBQuery($query);
		$valid->execute_query();
		$result = $valid->get_result();
		$num_results = $result->num_rows;
		$valid->close();

		if($num_results != 1){
			$_SESSION['invalid'] = 'Incorrect name or password<br>';
			header("Location: /index.html");
		}
		else{
			$row = $result->fetch_assoc();
			//user's role, email, and id
			$_SESSION['role']=$row['role'];
			$_SESSION['email']=$row['username'];
			$_SESSION['user_id']=$row['id'];
			
			header("Location: /homepage.html");
		}
		//PUT THIS IN THE MIDDLE OF THE INDEX PAGE FOR LOGI-IN VALIDATION
		//start_session() at the top of page
		/*if (isset($_SESSION['invalid'])){
			echo "<p style='color:red; margin:5px'>".$_SESSION['invalid']."</p><br>";
			unset($_SESSION['invalid']);
		}*/
		
	
	
?>