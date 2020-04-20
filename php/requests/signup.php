<?php
	include("../includes/connection.php");
	include("../includes/startSession.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myusername = mysqli_real_escape_string($db,$_POST["sname"]);
		$mypassword = mysqli_real_escape_string($db,$_POST["pass"]);
		$age = mysqli_real_escape_string($db,$_POST["age"]);
		$gender = mysqli_real_escape_string($db,$_POST["gender"]);

		echo "UserID = " . hash('ripemd128', $myusername, false) . "<br>";
		echo "Post[uname] = " . $myusername . "<br>";
		echo "Post[pass] = " . $mypassword . "<br>";
		echo "Post[age] = " . $age . "<br>";
		echo "Post[gender] = " . $gender . "<br>";
		

		$sql = "INSERT INTO `pa2004_Accounts`(`usernameId`, `username`, `password`, `accountType`, `lastLoggedIn`)
		VALUES ('0', '$myusername', '$mypassword', '0', 'NOW();' )";

		if ($db->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$sql = "INSERT INTO `pa2004_AccountData`(`usernameId`, `age`, `gender`)
		VALUES ('0', '$age', '$gender')";

		if ($db->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
   }
   include("../includes/close.php");
?>