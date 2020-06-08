<?php
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_URL, "https://imdb-api.com/en/API/MostPopularMovies/k_Ee94g38u");
	$film = json_decode(curl_exec($curl));

	$curl2 = curl_init();
	curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl2, CURLOPT_URL, "https://imdb-api.com/en/API/Top250Movies/k_Ee94g38u/");
	$film2 = json_decode(curl_exec($curl2));

	$curl3 = curl_init();
	curl_setopt($curl3, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl3, CURLOPT_URL, "https://imdb-api.com/en/API/ComingSoon/k_Ee94g38u");
	$film3 = json_decode(curl_exec($curl3));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film library</title>
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
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

	<section id="fan">
		<div class="container">
		<div id="accordion">
		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" href="#collapseOne">Coming Soon Movies</a>
		      </div>
		      <div id="collapseOne" class="collapse show" data-parent="#accordion">
		        <div class="card-body">
							<div class="row text-center">
								<?php
								foreach ($film3->items AS $items){
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
										<div class= 'canvas'>
											<a href='film.php?film=".$items->id."'>
											<img src='".$items->image."' alt=''/>
											<h4>".$items->title."</h4>
											</a>
											</div>
										</div>";

								};
								?>
								</div>
		        </div>
		      </div>
		    </div>

		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Top 250 Movies</a>
		      </div>
		      <div id="collapseTwo" class="collapse" data-parent="#accordion">
		        <div class="card-body">
							<div class="row text-center">
								<?php
								foreach ($film2->items AS $items){
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
										<div class= 'canvas'>
											<a href='film.php?film=".$items->id."'>
											<img src='".$items->image."' alt=''/>
											<h4>".$items->title."</h4>
											</a>
											</div>
										</div>";

								};
								?>
								</div>
		        </div>
		      </div>
		    </div>

		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Most Popular Movies</a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
							<div class="row text-center">
								<?php
								foreach ($film->items AS $items){
								echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
										<div class= 'canvas'>
								      <a href='film.php?film=".$items->id."'>
								      <img src='".$items->image."' alt=''/>
								      <h4>".$items->title."</h4>
								      </a>
									  </div>
								    </div>";

								};
								?>
								</div>
		        </div>
		      </div>
		    </div>

		  </div>
		</div>
	</section>
	<hr>

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
