<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	session_start();
	debug("Session Started", $output);

	if(isset($_SESSION['user']))
	{
		$output['session'] = array("accountType"=>$_SESSION['accountType'], "loggedIn"=>true);
	}
	else
	{
		error("Invalid session. Redirect to login page", $output);
		session_unset(); 
		session_destroy();
		debug("session destroyed", $output);
		header("Location: ../../index.php");
	}
?>