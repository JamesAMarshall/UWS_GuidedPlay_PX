<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 1) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDbConnection.php");

	$sql = "SELECT username, lastLoggedIn FROM pa2004_Accounts WHERE active=1 AND accountType = 0";	
	debug("Get Users: SQL: ". $sql, $output);

	$result = mysqli_query($shared_db, $sql);
	$accounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$output['result'] = $accounts;

	debug("Query Complete", $output);
	$temp = array('data' => $output['result']);
	echo json_encode($temp);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDb_close.php");
?>