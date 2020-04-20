<?php 
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo "<br>connected <br>";
	}
?>