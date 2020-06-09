<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$username = mysqli_real_escape_string($conn,$_POST["username"]);
		$password = hash('sha256', mysqli_real_escape_string($conn,$_POST["password"]), false);
		$accountType = 0; // 0 = Student (Base AccountType)

		if($conn->select_db('pa2004SharedDB')) { debug("Using pa2004SharedDB"); }
		else { error($conn->error); }

		if ($conn->query("INSERT INTO pa2004_Accounts VALUES ('$username', '$password', $accountType, null, NOW(), NOW(), 1,1)") === TRUE) {
			
			session_start();
			$_SESSION['user'] = $username;
			$_SESSION['accountType'] = $accountType;	
			
			$output['success'] = true;
			$output['session'] = array("user" => $_SESSION['user'], "accountType" => $_SESSION['accountType']);
		} else {
			error($conn->error);
		}
   }
   sendOutput();
   $conn->close();
?>