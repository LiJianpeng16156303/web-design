<?php
	require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
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

		<section id="carousel">
	          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	            <ol class="carousel-indicators">
	              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
	              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
	              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
	            </ol>
	            <div class="carousel-inner">
	              <div class="carousel-item active">
	                <img class="d-block w-100" src="images/1.jpg" alt="First slide">
	                <div class="carousel-caption d-none d-md-block">
	                </div>
	              </div>
	              <div class="carousel-item">
	                <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
	                <div class="carousel-caption d-none d-md-block">
	                </div>
	              </div>
	              <div class="carousel-item">
	                <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
	                <div class="carousel-caption d-none d-md-block">
	                </div>
	              </div>
	            </div>
	            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	            </a>
	    </div>
		</section>

	<section id="fan">
    <h2 class="text-center">FAN FAVORITES</h2>
    <br>

    <div class="container">
		<div class="row">
			<h4>Most Popular Movies</h4>
		</div>
      <div class="row text-center">
				<?php
					if (mysqli_num_rows($result2) > 0){
						$count = 0;

						while($row = mysqli_fetch_assoc($result2)){
							if ($count !== 12) {
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
												<div class= 'canvas'>
												<a href='film.php?film=".$row['imdbid']."'>
										    <img src='".$row['poster']."' alt=''/>
												<h4>".$row["filmname"]."</h4>
												</a>
												</div>
										  </div>";
							$count++;
							}
						}
				}
			 ?>
      </div>
		<div class="text-center">
				<a href="filmlibrary.php" class="btn btn-outline-success" role="button">More</a>
		</div>
		<hr>
    </div>

		<div class="container">
			<div class="row">
				<h4>Recent Movies</h4>
			</div>
      <div class="row text-center">
				<?php
					if (mysqli_num_rows($result3) > 0){
						$count = 0;

						while($row = mysqli_fetch_assoc($result3)){
							if ($count !== 12) {
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
										<div class= 'canvas'>
												<a href='film.php?film=".$row['imdbid']."'>
										    <img src='".$row['poster']."' alt=''/>
												<h4>".$row["filmname"]."</h4>
												</a>
												</div>
										  </div>";
							$count++;
							}
						}
				}
			 ?>
      </div>
		<div class="text-center">
			<a href="filmlibrary.php" class="btn btn-outline-success" role="button">More</a>
		</div>
		<hr>
    </div>

		<div class="container">
			<div class="row">
				<h4>Top Movies</h4>
			</div>
      <div class="row text-center">
				<?php
					if (mysqli_num_rows($result4) > 0){
						$count = 0;

						while($row = mysqli_fetch_assoc($result4)){
							if ($count !== 12) {
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
										<div class= 'canvas'>
												<a href='film.php?film=".$row['imdbid']."'>
										    <img src='".$row['poster']."' alt=''/>
												<h4>".$row["filmname"]."</h4>
												</a>
												</div>
										  </div>";
							$count++;
							}
						}
				}
			 ?>
      </div>
		<div class="text-center">
			<a href="filmlibrary.php" class="btn btn-outline-success" role="button">More</a>
		</div>
		<hr>
    </div>

	</section>

<footer class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p>Copyright © Li Jianpeng. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
