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
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$deviceName = mysqli_real_escape_string($conn,$_POST["deviceLabel"]);
		$type = mysqli_real_escape_string($conn,$_POST["deviceType"]);


		$result = $conn->query("SELECT deviceLabel FROM pa2004_SensorDevices WHERE deviceLabel = '$deviceName'");
		if($result && $result->num_rows > 0)
		{
			$output['success'] = false;
			$output['result'] = "A device already exits with this name";
			sendOutput();
			exit;
		}
		else {
			// error("Check Device name query failed to return. ". $conn->error);
		}


		$result = $conn->query("SELECT MAX(deviceId) FROM pa2004_SensorDevices");
		if($result && $result->num_rows == 1)
		{
			$row = $result->fetch_row();
			$deviceId = $row[0];
			$deviceId += 1;

			if ($conn->query("INSERT INTO pa2004_SensorDevices VALUES ($deviceId, '$deviceName', $type)") === TRUE) {
				$output['success'] = true;
				$output['result'] = "Successfully created new device";
		} else {
				error("New Device query failed to return. ". $conn->error);
				$output['success'] = false;
			}
		} else {
			error("Get Max Device Id query failed to return. ". $conn->error);
			$output['success'] = false;
		}
  	}
   sendOutput();
   $conn->close();
?>