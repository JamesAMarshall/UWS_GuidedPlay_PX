<?php
	include("config.php");
	session_start();
   
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
		VALUES (
			'0',
			'$myusername',
			'$mypassword',
			'0',
			'NOW();'
			)";

		if ($db->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$sql = "INSERT INTO `pa2004_AccountData`(`usernameId`, `age`, `gender`)
		VALUES (
			'0',
			'$age',
			'$gender'
			)";

		if ($db->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		// $sql = "SELECT username, accountType FROM pa2004_Accounts WHERE username = '$myusername' AND password = '$mypassword'";


		// $sql = "SELECT username, accountType FROM pa2004_Accounts WHERE username = '$myusername' AND password = '$mypassword'";
		// $result = mysqli_query($db,$sql);
		// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		// $active = $row['active'];
		// $count = mysqli_num_rows($result);
		
		// echo "Count = " . $count . "<br>";

		// If result matched $myusername and $mypassword, table row must be 1 row
		
		// if($count == 1) {

		// 	$_SESSION['username'] = $myusername;
		// 	$_SESSION['accountType'] = $row["accountType"];
		// 	echo "myusername = " . $myusername . "<br>";
		// 	echo "Row[accounType] = " . $row["accountType"] . "<br>";
			
		// 	echo "Session[username] = " . $_SESSION['username'] . "<br>";
		// 	echo "Session[accountType] = " . $_SESSION['accountType'] . "<br>";

		// 	if($_SESSION['accountType'] < 3)
		// 	{
		// 		header("location: ../../html/home_school.php");
		// 	}

		// 	if($_SESSION['accountType'] > 2 && $_SESSION['accountType'] < 5 )
		// 	{
		// 		header("location: ../../html/home_research.php");
		// 	}

		// } 
		// else {
		// 	$error = "Your Login Name or Password is invalid";
		// 	include("logout.php");
		// }
   }
   echo "end";
   mysqli_close($db);
?>