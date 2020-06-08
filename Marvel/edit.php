<?php
require"lock.php";
$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "marveldb"; //Create a varible contains the database dbname
$conn = mysqli_connect($servername, $username, $password, $dbname );
?>

<html>
<head>
	<title>PHP File Edit</title>
	<style>

nav{
	background-color: #0F0F0F;
	font: 12px opensans-bold, sans-serif;
	letter-spacing: 2.5px;
	margin: 0 auto;
	position: fixed;
	text-transform: uppercase;
	width: 100%;
	z-index: 100;
	min-height: 48px;
	text-align: center;
	display: inline-block;
	height: 48px;
	list-style: none;
	position: relative;
	text-align: center;
}

 a {
	-moz-transition: color .2s ease-in-out;
	-ms-transition: color .2s ease-in-out;
	-o-transition: color .2s ease-in-out;
	-webkit-transition: color .2s ease-in-out;
	display: inline-block;
	font-size: 18px;
	line-height: 32px;
	padding: 8px 13px;
	text-align: left;
	text-decoration: none;
	transition: color .2s ease-in-out;
	color: #4a5e6f;
}

nav a{
	margin-right: 10px;
}

a:hover{
	color: inherit;
}

nav a:hover{
	color: #FFFFFF;
}

table {
  border-collapse: collapse;
  width: 100%;
	margin-bottom: 10px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>

<body>

<nav><a href="login.php">Login</a> <a href="logout.php">Logout</a>    </nav>

<?php

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

		$sql   = "SELECT musicid, musicname, artist,album,imgurl,audiourl FROM music ";
		$sql2  = "SELECT movieid, moviename,date,nabo,orbo,gbo,nabor,gbor,cost,imagesurl FROM movie ";
    $result = mysqli_query($conn, $sql);
		$result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) > 0) {
	        // output data of each row
	        echo "<table>
					<th>musicid</th>
					<th>musicname</th>
					<th>artist</th>
					<th>album</th>
					<th>imgurl</th>
					<th>audiourl</th>
					<th>Edit</th>";

	         while($row = mysqli_fetch_assoc($result)) {
	       echo "<tr>
					 <td> " . $row["musicid"] . "</td>
					 <td> " . $row["musicname"] . "</td>
					 <td> " . $row["artist"] . "</td>
					 <td> " . $row["album"] . "</td>
					 <td> " . $row["imgurl"] . "</td>
					 <td> " . $row["audiourl"] . "</td>
					 <td> <a href='editmusic.php?id=".$row["musicid"]."'>Edit</a> </td>

					 </tr>";

         }
        echo "</table>";

	    } else {
	        echo "0 results";
    }

		if (mysqli_num_rows($result2) > 0) {
	        // output data of each row
	        echo "<table>
					<th>movieid</th>
					<th>moviename</th>
					<th>date</th>
					<th>nabo</th>
					<th>orbo</th>
					<th>gbo</th>
					<th>nabor</th>
					<th>gbor</th>
					<th>cost</th>
					<th>imagesurl</th>
					<th>Edit</th>";

	         while($row = mysqli_fetch_assoc($result2)) {
	       echo "<tr>
					 <td> " . $row["movieid"] . "</td>
					 <td> " . $row["moviename"] . "</td>
					 <td> " . $row["date"] . "</td>
					 <td> " . $row["nabo"] . "</td>
					 <td> " . $row["orbo"] . "</td>
					 <td> " . $row["gbo"] . "</td>
					 <td> " . $row["nabor"] . "</td>
					 <td> " . $row["gbor"] . "</td>
					 <td> " . $row["cost"] . "</td>
					 <td> " . $row["imagesurl"] . "</td>
					 <td> <a href='editmovie.php?id=".$row["movieid"]."'>Edit</a> </td>

					 </tr>";

         }
        echo "</table>";

	    } else {
	        echo "0 results";
    }

    mysqli_close($conn);
?>



</body>
</html>
