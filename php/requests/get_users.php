<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 4) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "SELECT * FROM pa2004_Accounts";	
	debug("Get Users: SQL: ". $sql, $output);

	$result = mysqli_query($db, $sql);
	$accounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$output['result'] = $accounts;

	debug("Query Complete", $output);
	
	sendOutput($output);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>