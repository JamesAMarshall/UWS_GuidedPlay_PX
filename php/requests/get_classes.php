<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 1 /* Add teacher Admin*/) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "SELECT * FROM pa2004_Classes";	
	debug("Get Classes. SQL: ". $sql, $output);

	$result = mysqli_query($db, $sql);
	$classes = mysqli_fetch_all($result, MYSQLI_ASSOC);


	$sql = "SELECT * FROM pa2004_Accounts WHERE accountType = '1'";	
	debug("Get Teachers. SQL: ". $sql, $output);

	$result = mysqli_query($db, $sql);
	$teacherAccounts = mysqli_fetch_all($result, MYSQLI_ASSOC);


	$sql = "SELECT * FROM pa2004_Accounts WHERE accountType = '0'";
	debug("Get students. SQL: ". $sql, $output);

	$result = mysqli_query($db, $sql);
	$studentAccounts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	
	debug("Query Complete", $output);

	$tempArray = array("teachers"=>$teacherAccounts, "students"=>$studentAccounts, "classes"=>$classes);
	$output['result'] = $tempArray;

	sendOutput($output);

	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>