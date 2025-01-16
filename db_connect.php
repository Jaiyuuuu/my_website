<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdatabase";



try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (\Throwable $th) {
    echo "connect Failed: " . $th -> getMessage
}


// Close the connection
$conn->close();
?>
