<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if(isset($_SESSION['accountType'])) 
	{
		switch ($_SESSION['accountType']) {
			case 4:
			case 3:
				break;
			
			default:
				error("Invalid Session accountType", $output); 
				sendOutput($output); 	
				exit; 
				break;
		}
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");

	$result = $conn->query("SELECT deviceTypeId, name FROM pa2004_DeviceType");
	if($result && $result->num_rows > 0)
	{
		$output['result'] = $result->fetch_all(MYSQLI_ASSOC);
		$output['success'] = true;
	} else {
		error("Device Type Select query failed to return. ". $conn->error);
		$output['success'] = false;
	}

	sendOutput();
	$conn->close();
?>