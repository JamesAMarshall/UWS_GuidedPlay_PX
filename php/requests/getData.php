<?php 
	include("../includes/connection.php");
	include("../includes/sql.php");
	include("../includes/print.php");

	$result = sql_SelectAll("pa2004_LightTempData");

	if (mysqli_num_rows($result) > 0) {
		echo "entered";

		while($row = mysqli_fetch_assoc($result))
		{
			print_AssociativeArray_WithoutLabels($row)
		}

		// output data of each row
		// while($row = mysqli_fetch_assoc($result)) {
		// 	// echo "Row";
		// 	echo "deviceId: " . $row["deviceId"] .
		// 		"plotNum: " . $row["plotNumber"] . 
		// 		"DateTime: " . $row["dateTime"] . 
		// 		"temp: " . $row["temp"] . 
		// 		"intensity: " . $row["intensity"] .
		// 		"cDetached: " . $row["couplerDetached"] .
		// 		"cAttached: " . $row["couplerAttached"] .
		// 		"host: " . $row["hostConnected"] .
		// 		"stopped: " . $row["stopped"] .
		// 		"end: " . $row["endOfFile"]
		// 		;
		// }

		echo "exited";
	} else {
		echo "0 results";
	}

	mysqli_close($db);
?>