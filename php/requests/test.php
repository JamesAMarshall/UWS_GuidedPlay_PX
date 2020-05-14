<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");

	$result = array("a"=> "0" , "b" => "3");


	$output['debug'] = "";
	$output['error'] = "";
	$output['result'] = "";
	

	$output['debug'] .= debug("This is a test");
	$output['debug'] .= debug("Second Test");
	$output['result'] = $result;


	echo json_encode($output);
?>