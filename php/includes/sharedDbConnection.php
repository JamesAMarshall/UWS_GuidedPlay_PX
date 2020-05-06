<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'pa2004');
	define('DB_PASSWORD', 'DwAjdDyI5pXTjq1');
	define('DB_DATABASE', 'pa2004SharedDB');
	$shared_db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	debug("Connection attemped", $output);
	
	if (!$shared_db) 
	{
		die("Connection failed to pa2004SharedDB: " . mysqli_connect_error());
	}
	else
	{
		debug("Connection succeded to pa2004SharedDB", $output);
	}
?>