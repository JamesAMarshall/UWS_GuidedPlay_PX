<?php
	include("config.php");
	session_start();
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myusername = mysqli_real_escape_string($db,$_POST["uname"]);
		$mypassword = mysqli_real_escape_string($db,$_POST["pass"]); 

		echo "Post[uname] = " . $myusername . "<br>";
		echo "Post[pass] = " . $mypassword . "<br>";
		
		$sql = "SELECT username, accountType FROM pa2004_Accounts WHERE username = '$myusername' AND password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		// if (mysqli_num_rows($result) > 0) {
		// 	// output data of each row
		// 	while($row = mysqli_fetch_assoc($result)) {
		// 		echo "username: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		// 	}
		// } else {
		// 	echo "0 results";
		// }

		// while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		// 	echo "username: " . $row["username"] . "accountType: " . $row["accountType"];
		// }
		
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		
		echo "Count = " . $count . "<br>";

		// If result matched $myusername and $mypassword, table row must be 1 row
		
		if($count == 1) {

			$_SESSION['username'] = $myusername;
			$_SESSION['accountType'] = $row["accountType"];
			echo "myusername = " . $myusername . "<br>";
			echo "Row[accounType] = " . $row["accountType"] . "<br>";
			
			echo "Session[username] = " . $_SESSION['username'] . "<br>";
			echo "Session[accountType] = " . $_SESSION['accountType'] . "<br>";

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
			include("logout.php");
		}
   }
   echo "end";
   mysqli_close($db);
?>