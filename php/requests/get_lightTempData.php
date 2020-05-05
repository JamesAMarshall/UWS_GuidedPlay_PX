<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if($_SESSION['accountType'] != 4 && $_SESSION['accountType'] != 3) 
	{
		error("Invalid Session accountType", $output); 
		sendOutput($output); 	
		exit; 
	}

	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "SELECT * FROM pa2004_LightTempData";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$output['result'] = $data;
	} 
	else {
		error("0 results", $output);
	}

	$count = mysqli_num_rows($result);

	$temp = array('data' => $output['result']);
	echo json_encode($temp);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>