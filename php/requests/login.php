<?php

$servername = "localhost";
$username = "pa2004";
$password = "DwAjdDyI5pXTjq1";
$dbname = "pa2004";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
        echo "connected";
}

// $sql = "SELECT * FROM pa2004_Accounts";
// $result = mysqli_query($conn, $sql);

$accountUsername = 'test';
$accountPassword = 'test';

$sql = "SELECT username, password FROM pa2004_Accounts WHERE username = '$accountUsername' AND password = '$accountPassword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
        echo "results found";

        while($row = mysqli_fetch_assoc($result)) {
                echo "username: " . $row["username"]. " - password: " . $row["password"]. "<br>";
        }
}   
else 
{
        echo "0 results";
}

mysqli_close($conn);
?>
