<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");

	if($output['success'])
	{
		$output['session'] = array("user" => $_SESSION['user'], "accountType" => $_SESSION['accountType']);
	}

	sendOutput();
?>