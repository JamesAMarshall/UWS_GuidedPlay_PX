<?php
	include_once($_SERVER['DOCUMENT_ROOT'] ."/php/includes/displayErrors.php");
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/DbConnection.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myusername = mysqli_real_escape_string($db,$_POST["username"]);
		$mypassword = mysqli_real_escape_string($db,$_POST["password"]);
		$age = mysqli_real_escape_string($db,$_POST["age"]);
		$gender = mysqli_real_escape_string($db,$_POST["gender"]);

		debug("UserID = " . hash('ripemd128', $myusername, false), $output);
		debug( "Post[username] = " . $myusername, $output);
		debug( "Post[password] = " . $mypassword, $output);
		debug( "Post[age] = " . $age, $output);
		debug( "Post[gender] = " . $gender, $output);

		$sql = "INSERT INTO `pa2004_Accounts`(`usernameId`, `username`, `password`, `accountType`, `lastLoggedIn`)
		VALUES ('0', '$myusername', '$mypassword', '0', 'NOW();' )";

		if ($db->query($sql) === TRUE) {
			debug("New record created successfully", $output);
		} else {
			error($sql . $conn->error, $output);
		}

		$sql = "INSERT INTO `pa2004_AccountData`(`usernameId`, `age`, `gender`)
		VALUES ('0', '$age', '$gender')";

		if ($db->query($sql) === TRUE) {
			debug("New record created successfully", $output);
		} else {
			error($sql . $conn->error, $output);
		}
   }
   sendOutput($output);
   include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/close.php");
?>