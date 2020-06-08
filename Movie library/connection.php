<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "s16156303";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM films";
	$sql2 = "SELECT * FROM films ORDER BY filmname";
	$sql3 = "SELECT * FROM films ORDER BY year DESC";
	$sql4 = "SELECT * FROM films ORDER BY year";

	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	$result3 = mysqli_query($conn, $sql3);
	$result4 = mysqli_query($conn, $sql4);
?>
