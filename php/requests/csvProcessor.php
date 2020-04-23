<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != "1" || $_SESSION['accountType'] != "3" || $_SESSION['accountType'] != "4") 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	if (isset($_POST["file"])) {
			$file =  $_POST["file"];
	}

	$data = json_decode($file);
	$arrlength = count($data);

	// Start at to to clear the first to rows of File name and table headings
	for($i = 2; $i < $arrlength; $i++) {

		$arrlength2 = count($data[$i]);

		$deviceId = -111;
		$plotNum = $data[$i][0];
		$dateTime = $data[$i][1];
		$temp = $data[$i][2];
		$intensity = $data[$i][3];
		$couplerDetached = $data[$i][4];
		$couplerAttached = $data[$i][5];
		$hostConnected = $data[$i][6];
		$stopped = $data[$i][7];
		$endOfFile = $data[$i][8];

		$sql = "INSERT INTO `pa2004_LightTempData`(`deviceId`, `plotNumber`, `dateTime`, `temp`, `intensity`, `couplerDetached`, `couplerAttached`, `hostConnected`, `stopped`, `endOfFile`)
				VALUES ('$deviceId', '$plotNum', '$dateTime', '$temp', '$intensity', '$couplerDetached', '$couplerAttached', '$hostConnected', '$stopped', '$endOfFile')";

		if ($db->query($sql) === TRUE) {
			debug("New record created successfully", $output);
		} else {
			error($sql . $db->error, $output);
		}
	}
	sendOutput($output);

	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>
