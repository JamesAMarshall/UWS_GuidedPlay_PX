<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = mysqli_real_escape_string($conn,$_POST["username"]);
		$password = hash('sha256', mysqli_real_escape_string($conn,$_POST["password"]), false); 

		if($conn->select_db('pa2004SharedDB')) { debug("Using pa2004SharedDB"); }
		else { error($conn->error); }

		$result = $conn->query("SELECT username, accountType, active FROM pa2004_Accounts WHERE username = '$username' AND password = '$password'");
		if($result) {
			if($result->num_rows == 1)
			{
				$row = $result->fetch_assoc();
				if($row['active'] == 1)
				{
					session_start();
					debug("Session started");
		
					$_SESSION['user'] = $username;
					$_SESSION['accountType'] = $row['accountType'];	
		
					$output['success'] = true;
					$output['session'] = array("user" => $_SESSION['user'], "accountType" => $_SESSION['accountType']);
	
					sendOutput();
					exit;
				}
			}
			elseif($result->num_rows > 1)
			{
				$output['success'] = false;
				error("Duplicate Entries for login details");
			}
			else 
			{
				$output['success'] = false;
				error("Your Login Name or Password is invalid");
			}
		}
		else {
			$output['success'] = false;
			error($conn->connect_error);
		}
	}
	sendOutput();
	   
	$conn->close();
?>