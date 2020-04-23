<?php
	ini_set('display_errors', 1); 
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$output['debug'] = "";
	// $output['error'] = "";
	$output['result'] = "";
	$output['session'] = "";

	function debug($string, &$array)
	{
		$array['debug'] .= "[Debug - " . $string . "] <br>";
	}

	function error($string, &$array)
	{
		$array['debug'] .= "[Error - " . $string . "] <br>";
	}

	function sendOutput($output)
	{
		echo json_encode($output);
	}
?>