<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if(isset($_SESSION['accountType'])) 
	{
		switch ($_SESSION['accountType']) {
			case 4:
				break;
			
			default:
				error("Invalid Session accountType", $output); 
				sendOutput($output); 	
				exit; 
				break;
		}
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");

	if($conn->select_db('pa2004SharedDB')) { debug("Using pa2004SharedDB"); }
	else { error($conn->error); }

	$result = $conn->query("SELECT username, accountType, lastLoggedIn FROM pa2004_Accounts WHERE active = 1 AND (accountType = 3 OR accountType = 4)");
	if($result && $result->num_rows > 0)
	{
		$output['result'] = $result->fetch_all(MYSQLI_ASSOC);
		$output['success'] = true;
	} else {
		error("Device Select query failed to return. ". $conn->error);
		$output['success'] = false;
	}

	sendOutput();
	$conn->close();
?>