<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if(isset($_SESSION['accountType'])) 
	{
		switch ($_SESSION['accountType']) {
			case 3:
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

	$result = $conn->query("SELECT * FROM pa2004_Animals_Plants");
	if($result && $result->num_rows > 0)
	{
		$output['result'] = $result->fetch_all(MYSQLI_ASSOC);
		$output['success'] = true;
	} else {
		error("Animal Plant Data Select query failed to return. ". $conn->error);
		$output['success'] = false;
	}

	sendOutput();
	$conn->close();
?>