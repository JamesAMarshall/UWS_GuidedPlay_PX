<?php
	ini_set('display_errors', 1); 
	ini_set('display_startup_errors', 1); 
	error_reporting(E_ALL);

	$output['result'] = "";
	$output['debug'] = "";
	// $output['error'] = "";
	$output['session'] = "";


	function debug($string, &$array)
	{
		$array['debug'] .= "[Debug - " . $string . "] ";
	}

	function error($string, &$array)
	{
		$array['debug'] .= "[Error - " . $string . "] ";
	}

	function sendOutput($output, $flag = 0)
	{
		if ($flag == 1) 
		{
			$temp = array("data" => $output['result'] );
			echo json_encode($temp);
		}
		else if($flag == 0)
		{
			echo json_encode($output);
		}
	}
?>