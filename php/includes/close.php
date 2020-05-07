<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	// Currently causes and error if run by itself instead of included in another php

	if($db){
		mysqli_close($db);
	}

	debug("connection closed", $output);
?>