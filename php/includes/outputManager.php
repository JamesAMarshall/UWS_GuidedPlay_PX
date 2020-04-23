<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	$result = array("a"=> "0" , "b" => "3");


	
	$output['result'] = $result;

	debug("Test 01", $output);
	debug("Test 02", $output);
	debug("Test 03", $output);

	error("Test 04", $output);
	error("Test 05", $output);

	sendOutput($output);
?>