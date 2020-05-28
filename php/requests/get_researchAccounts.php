<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 4) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDbConnection.php");

	$sql = "SELECT active, username, accountType, lastLoggedIn FROM pa2004_Accounts WHERE active = 1 AND (accountType = 3 OR accountType = 4)";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($shared_db, $sql);
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);	
	
	$output['result'] = array("data" => $data);
	sendOutput($output);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDb_close.php");
	
?>