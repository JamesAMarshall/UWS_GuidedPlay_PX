<?php 
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "SELECT * FROM pa2004_LightTempData";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0)
	{
		debug("entered", $output);
		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$output['result'] = $data;
		debug("exited", $output);
	} else {
		debug("0 results", $output);
	}
	sendOutput($output);
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>