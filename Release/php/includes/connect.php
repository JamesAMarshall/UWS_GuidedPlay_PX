<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/output.php");

	debug("Attempting To Connect");	
	$conn = new mysqli("localhost", "pa2004", "DwAjdDyI5pXTjq1", "pa2004");

	if ($conn->connect_errno) {
		echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
	else {
		debug("Successful Connection");
		// debug($conn->host_info);
	}
?>