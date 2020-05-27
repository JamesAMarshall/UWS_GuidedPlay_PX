<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");

	if(isset($_SESSION['user']))
	{
		$user = $_SESSION['user'];
	}
	else {
		error("No user");
		sendOutput();
		exit;
	}

	if (isset($_POST["file"])) {
		$file = $_POST["file"];
		$deviceId = mysqli_real_escape_string($conn,$_POST["deviceId"]);

		$data = json_decode($file);
		$arrlength = count($data);

		debug("count" . $arrlength);

		// Check file headers
		$validfile = true;

		$output['success'] = false;

		$validfile = (strpos($data[1][0], '#') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][0] . "header valid"); }
		else { error($data[1][0] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][1], 'Date Time') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][1] . "header valid"); }
		else { error($data[1][1] . "header invalid"); sendOutput(); exit; }
		
		$validfile = (strpos($data[1][2], 'Temp') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][2] . "header valid"); }
		else { error($data[1][2] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][3], 'Intensity') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][3] . "header valid"); }
		else { error($data[1][3] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][4], 'Coupler Detached') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][4] . "header valid"); }
		else { error($data[1][4] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][5], 'Coupler Attached') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][5] . "header valid"); }
		else { error($data[1][5] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][6], 'Host Connected') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][6] . "header valid"); }
		else { error($data[1][6] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][7], 'Stopped') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][7] . "header valid"); }
		else { error($data[1][7] . "header invalid"); sendOutput(); exit; }

		$validfile = (strpos($data[1][8], 'End Of File') !== false) ? $validfile : false;
		if ($validfile) { debug($data[1][8] . "header valid"); }
		else { error($data[1][8] . "header invalid"); sendOutput(); exit; }
		
		$output['result'] = "valid file";

		for($i = 2; $i < $arrlength-1; $i++) {	
			$plotNum = $data[$i][0];

			$mm = substr($data[$i][1], 0, 2);
			$dd = substr($data[$i][1], 3, 2);
			$yy = substr($data[$i][1], 6, 2);
			
			$hour = substr($data[$i][1], 9, 2);
			$min = substr($data[$i][1], 12, 2);
			$sec = substr($data[$i][1], 15, 2);

			$timehalf = substr($data[$i][1], 18, 2);

			// debug($dd . " " . $mm . " " . $yy . " " . $hour . " " . $min . " " . $sec. " " . $timehalf );
		
			$dateTime = "20".$yy."-".$mm."-".$dd." ".$hour.":".$min.":".$sec." ".$timehalf;	
			
			$temp = $data[$i][2];
			$intensity = $data[$i][3];
			$couplerDetached = $data[$i][4];
			$couplerAttached = $data[$i][5];
			$hostConnected = $data[$i][6];
			$stopped = $data[$i][7];
			$endOfFile = $data[$i][8];
		

			$sql = "INSERT INTO pa2004_LightTempData VALUES ('$deviceId','$user','$plotNum','$dateTime' ,'$temp','$intensity', '$couplerDetached', '$couplerAttached', '$hostConnected', '$stopped', '$endOfFile')";
			if ($conn->query($sql) === TRUE) {
				// debug("New record created successfully");
			} else {
				error($sql . $conn->error);
			}
		}
	}

	$output['success'] = true;
	sendOutput();
	$conn->close();
?>