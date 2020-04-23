<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'pa2004');
	define('DB_PASSWORD', 'DwAjdDyI5pXTjq1');
	define('DB_DATABASE', 'pa2004');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	debug("Connection attemped", $output);
	
	if (!$db) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		debug("Connection succeded", $output);
	}
?>