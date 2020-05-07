<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");

	switch ($_SESSION['accountType']) {
		case 0:
		case 1:
		case 5:
			header("Location: ../../html/home_school.php");
			break;
		case 3:
		case 4:
			header("Location: ../../html/home_research.php");
			break;
		default:
			error("Invalid Session accountType", $output); 
			sendOutput($output); 	
			exit; 
			break;
	}
	sendOutput($output);
?>