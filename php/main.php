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

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
?>