<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 1 && $_SESSION['accountType'] != 5) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

		$username = mysqli_real_escape_string($db,$_POST["username"]);
		$classId = mysqli_real_escape_string($db,$_POST["classId"]);

		$sql = "INSERT INTO pa2004_StudentToClass VALUES ($classId, '$username')";
		debug("SQL: ". $sql, $output);

		$result = mysqli_query($db, $sql);
		
		if($result)
		{
			$output['result'] = "Success";
		}
		else {
			error("Add Student to Class failed. username: " . $username . "class: " . $classId, $output);
		}
		sendOutput($output);
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
	}
?>