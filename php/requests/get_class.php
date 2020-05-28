<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 5 && $_SESSION['accountType'] != 1) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

		$classId = (int) mysqli_real_escape_string($db,$_POST["classId"]);
		debug("ClassId: ". $classId, $output);
		
		$class = "";
		$data = "";

		if($classId == 0)
		{
			// $sql = "SELECT * FROM pa2004_Classes";	
			// debug("Get Users: SQL: ". $sql, $output);
			// $result = mysqli_query($db, $sql);
		}
		else {
			$sql = "SELECT * FROM pa2004_Classes WHERE classId = $classId";	
			debug("Get Users: SQL: ". $sql, $output);
			$result = mysqli_query($db, $sql);
			$class = mysqli_fetch_all($result, MYSQLI_ASSOC);
			

			// @BROKEN Inner join on two tables from two different DB's
			$sql = "SELECT username, lastLoggedIn FROM pa2004_Accounts INNER JOIN pa2004_StudentToClass ON pa2004_SharedDbAccounts.username = pa2004_StudentToClass.student_username WHERE pa2004_Accounts.active=1 AND pa2004_StudentToClass.classId = $classId";	
			debug("Get Users: SQL: ". $sql, $output);
			$result = mysqli_query($db, $sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
		}		
		
		
		$output['result'] = array("class" => $class, "data" => $data);
		sendOutput($output);

		

		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
	}
?>