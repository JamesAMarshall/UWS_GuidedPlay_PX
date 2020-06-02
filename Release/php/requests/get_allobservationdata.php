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

	$result = $conn->query("SELECT a.*, b.animal, b.plant AS anim_plant, c.plant AS harvest_plant, c.size, c.location, d.plant AS healthy_plant, d.reason
	FROM (((`pa2004_Observation` AS a
	INNER JOIN `pa2004_Animals_Plants` AS b ON b.observationId  = a.observationId)
	INNER JOIN `pa2004_HarvestablePlants` AS c ON c.observationId = a.observationId)
	INNER JOIN `pa2004_HealthyPlants` AS d ON d.observationId = a.observationId)");

	if($result && $result->num_rows > 0)
	{
		$output['result'] = $result->fetch_all(MYSQLI_ASSOC);
		$output['success'] = true;
	} else {
		error("Observation Data Select query failed to return. ". $conn->error);
		$output['success'] = false;
	}

	sendOutput();
	$conn->close();
?>