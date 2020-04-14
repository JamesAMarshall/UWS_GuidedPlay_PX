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

mysqli_close($conn);
?>