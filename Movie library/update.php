<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Film data update</title>
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
  // Check if form is submitted for update, then redirect to homepage after update
  if(isset($_POST['update']))
  {
    $filmid   = $_POST['filmid'];
    $filmname =$_POST['filmname'];
    $imdbid      =$_POST['imdbid'];
    $type =$_POST['type'];
    $region     =$_POST['region'];
    $year      =$_POST['year'];
    $poster =$_POST['poster'];
  	// update film data
  	$sql = ("UPDATE films SET filmname='$filmname' WHERE filmid=$filmid");
  	$result = $conn->query($sql);
  	// Redirect to homepage to display updated film in list
  	header("Location: updatelink.php");
  }

  // Display selected film data based on $filmid
  // Getting $filmid from url
  $filmid = $_GET['filmid'];

  // Fetch film data based on $filmid
  $sql = "SELECT * FROM films WHERE filmid=$filmid";
  $result = $conn->query($sql);
  while($row =$result->fetch_assoc())
  {
  	$filmname   = $row['filmname'];
    $imdbid        = $row["imdbid"];
    $type   = $row["type"];
    $region       = $row["region"];
    $year        = $row["year"];
    $poster   = $row["poster"];
  }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg">
    <div class="container">
      <a class="navbar-brand" href="index.php">Movie DB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="filmlibrary.php">Film library</a>
          </li>
          <li class="nav-item dropdown">
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

  <section id="update">
    <div class="container">
      <h2 class="text-center">Update the data</h2>
      <form name="update_user" method="post" action="update.php">
        <table style="width:100%">
          <div class="row form-group">
              <label class="control-label col-lg-1">Filmname:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $filmname;?>" name="filmname">
              </div>
              <label class="control-label col-lg-1">Imdbid:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $imdbid;?>" name="imdbid">
              </div>
          </div>
          <div class="row form-group">
              <label class="control-label col-lg-1">Genres:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $type;?>" name="type">
              </div>
              <label class="control-label col-lg-1">Countries:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $region;?>" name="region">
              </div>
          </div>
          <div class="row form-group">
              <label class="control-label col-lg-1">Year:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $year;?>" name="year">
              </div>
              <label class="control-label col-lg-1">Poster:</label>
              <div class="col-lg-5 col-md-6">
                  <input class="form-control" type="text" value="<?php echo $poster;?>" name="poster">
              </div>
          </div>

          <tr>
            <td><input class="form-control" type="hidden" name="filmid" value= <?php echo $_GET['filmid'];?> ></td>
            <td><input class="btn btn-light" type="submit" name="update" value="Update"></td>
          </tr>
        </table>
      </form>

      </div>
    </div>
  </section>

</body>
</html>
