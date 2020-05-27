<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/output.php");

	session_start();
	debug("Checking Session");

	if(isset($_SESSION['user']))
	{
		$output['success'] = true;
	}
	else
	{
		error("Invalid session. Redirect to login page");
		$output['success'] = false;
		session_unset(); 
		session_destroy();
	}
?>