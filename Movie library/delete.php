<?php
// include database connection file

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s16156303";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get filmid from URL to delete that film
$filmid = $_GET['filmid'];

// Delete film row from table based on given filmid
$sql = ("DELETE FROM films WHERE filmid=$filmid");
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// After delete redirect to Home, so that latest film list will be displayed.
header("Location:deletelink.php");
?>
