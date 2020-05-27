<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if(isset($_SESSION['user']))
	{
		$output['result'] = $_SESSION['user'];
		$output['success'] = true;
	}
	else { $output['success'] = false;}
	sendOutput();
?>