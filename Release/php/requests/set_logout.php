<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/output.php");
	session_start();
	session_unset(); 
	if(session_destroy()) {
		debug("session destroyed");
		sendOutput();
		die();
	}
?>