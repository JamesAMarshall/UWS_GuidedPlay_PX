<?php 

$sql = "INSERT INTO `pa2004_LightTempData`(`deviceId`, `plotNumber`, `dateTime`, `temp`, `intensity`, `couplerDetached`, `couplerAttached`, `hostConnected`, `stopped`, `endOfFile`)
VALUES (
	'000',
	'-1',
	'03/21/20 11:32:35 AM',
	'1',
	'2',
	'',
	'',
	'',
	'',
	''
	)";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>