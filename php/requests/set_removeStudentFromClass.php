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

		$username = mysqli_real_escape_string($db,$_POST["username"]);
		$classId = mysqli_real_escape_string($db,$_POST["classId"]);

		$sql = "DELETE FROM pa2004_StudentToClass WHERE username = '$username'";
		debug("SQL: ". $sql, $output);

		$result = mysqli_query($db, $sql);
		
		if($result)
		{
			$output['result'] = "Success";
		}
		else {
			error("Remove student failed. username: " . $username, $output);
		}
		sendOutput($output);
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
	}
?>