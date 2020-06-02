<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/session.php");
	if(isset($_SESSION['accountType'])) 
	{
		switch ($_SESSION['accountType']) {
			case 5:
			case 4:
				break;
			
			default:
				error("Invalid Session accountType", $output); 
				sendOutput($output); 	
				exit; 
				break;
		}
	}
	include($_SERVER['DOCUMENT_ROOT'] ."/php/includes/connect.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$username = mysqli_real_escape_string($conn,$_POST["username"]);

		if($conn->select_db('pa2004SharedDB')) { debug("Using pa2004SharedDB"); }
		else { error($conn->error); }

		$password = hash('sha256', 'reset', false);

		if ($conn->query("UPDATE pa2004_Accounts SET active= 0 WHERE username = '$username'") === TRUE) {	
			$output['success'] = true;
		} else {
			error($conn->error);
		}
   }
   sendOutput();
   $conn->close();
?>