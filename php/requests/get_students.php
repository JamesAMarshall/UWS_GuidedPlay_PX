<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 1) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "SELECT username, lastLoggedIn FROM pa2004_Accounts WHERE accountType = 0";	
	debug("Get Users: SQL: ". $sql, $output);

	$result = mysqli_query($db, $sql);
	$accounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$output['result'] = $accounts;

	debug("Query Complete", $output);
	$temp = array('data' => $output['result']);
	echo json_encode($temp);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>