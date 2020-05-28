<?php
	ini_set('display_errors', 1); 
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$output['result'] = "";
	$output['success'] = "";
	$output['debug'] = "";
	$output['session'] = "";

	function debug($string)
	{
		$GLOBALS['output']['debug'] .= "[Debug - " . $string . "] ";
	}

	function error($string)
	{
		$GLOBALS['output']['debug'] .= "[Error - " . $string . "] ";
	}

	function sendOutput()
	{
		echo json_encode($GLOBALS['output']);
	}
?>