<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$username = mysqli_real_escape_string($conn,$_POST["username"]);
		$accountType = mysqli_real_escape_string($conn,$_POST["accountType"]);

		if($conn->select_db('pa2004SharedDB')) { debug("Using pa2004SharedDB"); }
		else { error($conn->error); }

		if ($conn->query("UPDATE pa2004_Accounts SET accountType = $accountType WHERE username = '$username'") === TRUE) {	
			$output['success'] = true;
		} else {
			error($conn->error);
		}
   }
   sendOutput();
   $conn->close();
?>