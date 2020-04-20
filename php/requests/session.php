<?php
	include("../includes/connection.php");
	include("../includes/sql.php");
	include("../includes/startSession.php");

	$userToCheck = $_SESSION['username'];

	$result = sql_Query("SELECT username FROM pa2004_Accounts WHERE username = '$userToCheck' ");
	$row = sql_GetAssociativeRow($result);

	$userSession = $row['username'];

	if(!isset($_SESSION['username'])){
		session_unset(); 
		header("location: ../../index.php");
		die();
	}

	include("../includes/close.php");
?>