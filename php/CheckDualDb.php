<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");

	$sql = "USE pa2004SharedDB; USE pa2004; SELECT ps.username, ps.LastLoggedIn, p.classId FROM pa2004SharedDB.pa2004_Accounts AS ps, pa2004.pa2004_StudentToClass AS p WHERE ps.username = p.student_username";
	
	// Check connection
	if ($db -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $db -> connect_error;
	  exit();
	}
	
	// Perform query
	if ($db -> multi_query($sql)) {
		do {
			// Store first result set
			if ($result = $db -> store_result()) {
			  while ($row = $result -> fetch_row()) {
				echo "[".$row[0] . "|" .$row[1] ."|" .$row[2] ."] <br>";
			  }
			 $result -> free_result();
			}
			// if there are more result-sets, the print a divider
			if ($db -> more_results()) {
			  printf("-------------\n");
			}
			 //Prepare next result set
		  } while ($db -> next_result());
	}
	else {
		echo("Error description: " . $db -> error);
	}
	
	$db -> close();
	?> 

?>