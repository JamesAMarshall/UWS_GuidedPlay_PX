<?php
	include("../includes/connection.php");
	include("../includes/sql.php");
	include("../includes/startSession.php");
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$myusername = mysqli_real_escape_string($db,$_POST["uname"]);
		$mypassword = mysqli_real_escape_string($db,$_POST["pass"]); 

		echo "Post[uname] = " . $myusername . "<br>";
		echo "Post[pass] = " . $mypassword . "<br>";
		
		$result = sql_Query("SELECT username, accountType FROM pa2004_Accounts WHERE username = '$myusername' AND password = '$mypassword'");
		$row = mysqli_fetch_assoc($result);
		
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		
		echo "Count = " . $count . "<br>";

		// If result matched $myusername and $mypassword, table row must be 1 row
		
		if($count == 1) {

			$_SESSION['username'] = $myusername;
			$_SESSION['accountType'] = $row["accountType"];

			if($_SESSION['accountType'] < 3)
			{
				header("location: ../../html/home_school.php");
			}

			if($_SESSION['accountType'] > 2 && $_SESSION['accountType'] < 5 )
			{
				header("location: ../../html/home_research.php");
			}

		} 
		else {
			$error = "Your Login Name or Password is invalid";
			include("../includes/endSession.php");
		}
   }
   include("../includes/close.php");
?>