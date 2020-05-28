<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 5 && $_SESSION['accountType'] != 4) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDbConnection.php");

		$username = mysqli_real_escape_string($shared_db,$_POST["username"]);
		$accountType = (int) mysqli_real_escape_string($shared_db,$_POST["accountType"]);

		$sql = "UPDATE pa2004_Accounts SET accountType = $accountType WHERE username = '$username'";	// UPDATE password WHERE username = $username
		debug("SQL: ". $sql, $output);

		$result = mysqli_query($shared_db, $sql);
		
		if($result)
		{
			$output['result'] = "Success";
		}
		else {
			error("Set Account Type failed. username: " . $username, $output);
		}
		sendOutput($output);
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDb_close.php");
	}
?>