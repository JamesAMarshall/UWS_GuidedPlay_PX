<?php 
	include("config.php");

	$sql = "SELECT * FROM pa2004_LightTempData";
	$result = mysqli_query($db,$sql);

	if (mysqli_num_rows($result) > 0) {
		echo "entered";
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			// echo "Row";
			echo "deviceId: " . $row["deviceId"] .
				"plotNum: " . $row["plotNumber"] . 
				"DateTime: " . $row["dateTime"] . 
				"temp: " . $row["temp"] . 
				"intensity: " . $row["intensity"] .
				"cDetached: " . $row["couplerDetached"] .
				"cAttached: " . $row["couplerAttached"] .
				"host: " . $row["hostConnected"] .
				"stopped: " . $row["stopped"] .
				"end: " . $row["endOfFile"]
				;
		}

		echo "exited";
	} else {
		echo "0 results";
	}

	mysqli_close($db);
?>