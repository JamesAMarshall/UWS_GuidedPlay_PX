<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");
	session_start();
	session_unset(); 
	if(session_destroy()) {
		debug("session destroyed", $output);
		sendOutput($output);
		die();
	}
?>