<?php
	// include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDbConnection.php");


		
		$class = "";
		$data = "";

		// @BROKEN Inner join on two tables from two different DB's
		$sql = "";
		$sql .= "USE pa2004_SharedDb;";
		$sql .= "USE pa2004;";
		$sql .= "SELECT pshared.username, pshared.lastLoggedIn FROM pa2004_SharedDb.pa2004_Accounts AS pshared INNER JOIN pa2004.pa2004_StudentToClass AS p ON pshared.username = p.student_username WHERE pshared.active=1 AND p.classId = 10001";	

		debug("Get Users: SQL: ". $sql, $output);
		$result = mysqli_multi_query($db, $sql);
		
		if(!$result)
		{
			echo("Error description: " . $db -> error);
		}

		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			
		
		
		$output['result'] = array("class" => $class, "data" => $data);
		sendOutput($output);

		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
		include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/sharedDb_close.php");
?>