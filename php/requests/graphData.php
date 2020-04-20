<?php 
	include("../includes/connection.php");
	include("../includes/sql.php");

	$result = sql_query("SELECT plotNumber, temp FROM pa2004_LightTempData");

	$myData=array(); // blank array
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) 
		{
			array_push($myData,$row); // push rows to array $myData
		}
		echo json_encode($myData);
	} 
	else {
		echo "0 results";
	}

	mysqli_close($db);
?>