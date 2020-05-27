<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$answers = json_decode($_POST['answers'],true);
		$reserved = false;

		$result = $conn->query("SELECT MAX(observationId) FROM pa2004_Observation");
		
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();

			$observationId = $row['MAX(observationId)'];
			$observationId += 1;
	
			$weather = $answers[0];
			$temp = $answers[1];
			$wind = $answers[2];

			$user = $_SESSION['user'];
			if ($conn->query("INSERT INTO pa2004_Observation VALUES ($observationId,'$user', NOW(), '$weather', '$temp', '$wind')") === TRUE) {
				debug("New record created successfully");
				$reserved = true;
			} else {
				debug("Error: INSERTING Observation  <br>" . $conn->error);
			}
	
		}
		elseif ($result->num_rows > 1) {
			debug("Query returned multiple results when expecting one");
		}
		else {
			debug("Query returned zero results when expecting one");
		}
		
		if($reserved)
		{
			$arrlength = count($answers[3]);
			for($i = 0; $i < $arrlength; $i++) {

				$animal = $answers[3][$i]["animal"];
	
				$arrlength2 = count($answers[3][$i]["plants"]);
				for($j = 0; $j < $arrlength2; $j++) {
	
					$plant = $answers[3][$i]["plants"][$j];

					if ($conn->query("INSERT INTO pa2004_Animals_Plants VALUES ($observationId, '$animal', '$plant')") === TRUE) {
						debug("New record created successfully");
					} else {
						debug("Error: INSERTING Animals_Plants  <br>" . $conn->error);
					}
	
				}
			}	
	
			$arrlength = count($answers[4]);
			for($i = 0; $i < $arrlength; $i++) {

				$plant = $answers[4][$i]["plant"];
				$size = $answers[4][$i]["size"];
				$location = $answers[4][$i]["location"];

				if ($conn->query("INSERT INTO pa2004_HarvestablePlants VALUES ($observationId, '$plant', '$size', '$location')") === TRUE) {
					debug("New record created successfully");
				} else {
					debug("Error: INSERTING HarvestablePlants  <br>" . $conn->error);
				}
			}	
	
			$arrlength = count($answers[5]);
			for($i = 0; $i < $arrlength; $i++) {

				$plant = $answers[5][$i]["plant"];

				$arrlength2 = count($answers[5][$i]["reason"]);
				for($j = 0; $j < $arrlength2; $j++) {

					$reason = $answers[5][$i]["reason"][$j];
					
					if ($conn->query("INSERT INTO pa2004_HealthyPlants VALUES ($observationId, '$plant', '$reason')") === TRUE) {
						debug("New record created successfully");
					} else {
						debug("Error: INSERTING HealthyPlants  <br>" . $conn->error);
					}
				}
			}	
		}	

		$conn->close();

		// $output['result'] = array(
		// 	'weather' => $answers[0],
		// 	'temp' => $answers[1],
		// 	'wind' => $answers[2],
		// 	'animals' => $answers[3],
		// 	'harvestable' => $answers[4],
		// 	'healthy' => $answers[5]
		// );
		
		sendOutput();
	}
?>