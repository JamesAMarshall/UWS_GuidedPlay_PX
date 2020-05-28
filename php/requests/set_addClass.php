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

		// $teacher = mysqli_real_escape_string($db,$_POST["teacher"]);
		$className = mysqli_real_escape_string($db,$_POST["className"]);

		$sql = "SELECT MAX(classId)	FROM pa2004_Classes";
		debug("SQL: ". $sql, $output);
		$result = mysqli_query($db, $sql);
		if($result){
			$num = mysqli_num_rows($result);
			if($num = 1){
				$row = $result->fetch_row();
			}
			else {
				error("Get Highest Id Returned more than one result.", $output);
			}
		}
		else {
			error("Failed to Get MAX(classId).", $output);
		}
		
		$classId = $row[0] + 1;
		debug("ClassId: ". $classId, $output);

		$teacher = $_SESSION['user'];

		$sql = "INSERT INTO pa2004_Classes VALUES ($classId, '$className','$teacher')";
		debug("SQL: ". $sql, $output);
		$result = mysqli_query($db, $sql);
		
		if($result) {
			$output['result'] = "Success";
		}
		else {
			error("Add Student to Class failed. username: " . $username . "class: " . $classId, $output);
		}
		sendOutput($output);
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
	}
?>