<?php 

if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
		echo "connected <br>";
}

?>