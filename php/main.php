<?php 
$servername = "localhost";
$username = "pa2004";
$password = "DwAjdDyI5pXTjq1";
$dbname = "pa2004";

echo "begun";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
        echo "died";
    die("Connection failed: " . mysqli_connect_error());
}
else{
        echo "connected";
}

echo "end";

$sql = "SELECT * FROM pa2004_Accounts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "username: " . $row["username"]. " - password: " . $row["password"]. " - accountType " . $row["accountType"]. "Last Logged In". $row[lastLoggedIn]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>