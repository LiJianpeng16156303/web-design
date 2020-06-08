<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Film data read</title>
	<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
	<!-- Latest compiled Bootstrap JavaScript -->
<script src="js/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- latest jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg">
		<div class="container">
			<a class="navbar-brand" href="index.php">Movie DB</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="filmlibrary.php">Film library</a>
					</li>
					<li class="nav-item  active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Developer</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="create.php">Create</a>
              <a class="dropdown-item" href="read.php">Read</a>
              <a class="dropdown-item" href="updatelink.php">Update</a>
              <a class="dropdown-item" href="deletelink.php">Delete</a>
            </div>
          </li>
				</ul>
				<form class="form-inline my-2 my-lg-0" action="search.php" method="post">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="expression">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

<?php
$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "s16156303"; //Create a varible contains the database dbname
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

    $sql = "SELECT * FROM films";
   $result = $conn->query($sql);

    if ($result->num_rows > 0) {
	        // output data of each row
	        echo "<table class='table table-hover'>
					<th>Filmid</th>
					<th>Filmname</th>
					<th>Imdbid</th>
					<th>Genres</th>
					<th>Countries</th>
					<th>Year</th>
					<th>Poster</th>";

	         while($row =$result->fetch_assoc()) {
	       echo "<tr>
					 <td> " . $row["filmid"] . "</td>
					 <td> " . $row["filmname"] . "</td>
					 <td> " . $row["imdbid"] . "</td>
					 <td> " . $row["type"] . "</td>
					 <td> " . $row["region"] . "</td>
					 <td> " . $row["year"] . "</td>
					 <td> " . $row["poster"] . "</td>
					 </tr>";

         }
        echo "</table>";

	    } else {
	        echo "0 results";
    }

    $conn->close();
?>



</body>
</html>
