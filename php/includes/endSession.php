<?php
	session_unset(); 
	if(session_destroy()) {
	   header("Location: ../../index.php");
	   echo "<br>session destroyed <br>";
	   die();
	}
?>