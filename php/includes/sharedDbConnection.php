<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	define('DB_SERVER_S', 'localhost');
	define('DB_USERNAME_S', 'pa2004');
	define('DB_PASSWORD_S', 'DwAjdDyI5pXTjq1');
	define('DB_DATABASE_S', 'pa2004SharedDB');
	$shared_db = mysqli_connect(DB_SERVER_S,DB_USERNAME_S,DB_PASSWORD_S,DB_DATABASE_S);
	
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