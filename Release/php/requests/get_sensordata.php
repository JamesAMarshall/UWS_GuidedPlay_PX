<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");

	$result = $conn->query("SELECT * FROM pa2004_LightTempData");
	if($result && $result->num_rows > 0)
	{
		$output['result'] = $result->fetch_all(MYSQLI_ASSOC);
		$output['success'] = true;
	} else {
		error("Sensor Data Select query failed to return. ". $conn->error);
		$output['success'] = false;
	}

	sendOutput();
	$conn->close();
?>