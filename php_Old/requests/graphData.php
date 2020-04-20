<?php 
	include("config.php");

	$sql = "SELECT plotNumber, temp FROM pa2004_LightTempData";
	$result = mysqli_query($db,$sql);


	$myData=array(); // blank array
	if (mysqli_num_rows($result) > 0) {

		while($row = mysqli_fetch_assoc($result)) {
			// echo $row . "<br>";
			array_push($myData,$row); // push rows to array $myData
		}
		echo json_encode($myData);


		// echo json_encode($myData);
	} 
	else {
		echo "0 results";
	}


	mysqli_close($db);
?>