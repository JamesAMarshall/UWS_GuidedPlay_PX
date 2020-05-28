<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 5 && $_SESSION['accountType'] != 1) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/Connection.php");

		$classId = mysqli_real_escape_string($db,$_POST["classId"]);

		// Delete Students from Class in StudentToClass
		$sql = "DELETE FROM pa2004_StudentToClass WHERE classId = '$classId'";
		debug("SQL: ". $sql, $output);
		$result = mysqli_query($db, $sql);
		if($result)
		{
			$output['result'] = "Success";
		}
		else {
			error("Remove students from class failed. username: " . $username, $output);
		}


		// Delete Class from Classes
		$sql = "DELETE FROM pa2004_Classes WHERE classId = '$classId'";
		debug("SQL: ". $sql, $output);
		$result = mysqli_query($db, $sql);

		if($result)
		{
			$output['result'] = "Success";
		}
		else {
			error("Delete Class failed. username: " . $username, $output);
		}
		sendOutput($output);
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
	}
?>