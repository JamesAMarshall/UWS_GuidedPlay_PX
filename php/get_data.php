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
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['accounts'] = $temp;

	$sql = "SELECT * FROM pa2004_StudentToClasses";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['studClass'] = $temp;

	$sql = "SELECT * FROM pa2004_Classes";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['classes'] = $temp;

	$sql = "SELECT * FROM pa2004_LightTempData";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['lightTempData'] = $temp;

	$sql = "SELECT * FROM pa2004_SensorDevices";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['devices'] = $temp;

	$sql = "SELECT * FROM pa2004_DeviceType";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['deviceTypes'] = $temp;

	$sql = "SELECT * FROM pa2004_Schools";	
	debug("Get Users: SQL: ". $sql, $output);
	$result = mysqli_query($db, $sql);
	$temp = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data['schools'] = $temp;


	$output['result'] = $data;

	debug("Query Complete", $output);
	
	sendOutput($output);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>