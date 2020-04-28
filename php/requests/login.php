<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	// 1. Connect To Database
	// 2. Start a session
	
	// 3. Check for POST data
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = mysqli_real_escape_string($db,$_POST["username"]);
		$mypassword = mysqli_real_escape_string($db,$_POST["password"]); 

		$sql = "SELECT username, accountType FROM pa2004_Accounts WHERE username = '$myusername' AND password = '$mypassword'";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);

		if($count == 1) 
		{
			session_start();
			debug("Session started", $output);

			$_SESSION['user'] = $myusername;
			$_SESSION['accountType'] = $row['accountType'];	

			$output['result'] = $_SESSION['accountType'];
		} 
		else 
		{
			error("Your Login Name or Password is invalid", $output);
		}
   	}
	sendOutput($output);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>