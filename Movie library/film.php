<?php
	$imdbid = $_GET['film'];

	//IMDB Query
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$options = "/FullActor,FullCast,Posters,Images,Trailer,Ratings,Wikipedia,";
	curl_setopt($curl, CURLOPT_URL, "https://imdb-api.com/en/API/Title/k_Ee94g38u/".$imdbid.$options);
	$film = json_decode(curl_exec($curl));

	$curl2 = curl_init();
	curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl2, CURLOPT_URL, "https://imdb-api.com/en/API/YouTubeTrailer/k_Ee94g38u/".$imdbid);
	$video = json_decode(curl_exec($curl2));

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

	<section id="detail">
    <div class="container">
		<?php echo '<h2>'.$film->title.'</h2>';?>
	  <br>
      <div class="row text-center">
        <div class="col-12 col-sm-12 col-md-4">
					<?php echo '<img src="'.$film->image.'" width="80%" alt=""/>';?>
				</div>
        <div class="col-12 col-sm-12 col-md-8">
			<table class="table-active">
			<tr>
			  <th>Directors:</th>
			  <td><?php echo "$film->directors";?></td>
			</tr>
			<tr>
			  <th>Writers:</th>
			  <td><?php echo "$film->writers";?></td>
			</tr>
			<tr>
			  <th>Stars:</th>
			  <td><?php echo "$film->stars";?></td>
			</tr>
			<tr>
			  <th>Genres:</th>
			  <td><?php echo "$film->genres";?></td>
			</tr>
			<tr>
			  <th>Companies:</th>
			  <td><?php echo "$film->companies";?></td>
			</tr>
			<tr>
			  <th>Countries:</th>
			  <td><?php echo "$film->countries";?></td>
			</tr>
			<tr>
			  <th>Languages:</th>
			  <td><?php echo "$film->languages";?></td>
			</tr>
			<tr>
			  <th>Year:</th>
			  <td><?php echo "$film->year";?></td>
			</tr>
			<tr>
			  <th>RuntimeStr:</th>
			  <td><?php echo "$film->runtimeStr";?></td>
			</tr>
			<tr>
			  <th>IMDbRating:</th>
			  <td><?php echo "$film->imDbRating";?></td>
			</tr>
			</table>
	    </div>
	  </div>
	</div>

	<div class="container">
		  <h2 class="text-center">Plot</h2>
		  <p><?php echo "$film->plot";?></p>
	</div>
	</section>

	<section id="trailer">
	  <div class="container">
		<h2  class="text-center">Trailer</h2>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<iframe width="100%" height="480" src="https://www.youtube.com/embed/<?php echo "$video->videoId";?>"
				frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>

			</div>
        </div>
	  </div>
	</section>

	<section id="similars">
    <div class="container">
			<h2 class="text-center">Similars</h2>
	    <br>

      <div class="row text-center">
				<?php
				foreach ($film->similars AS $similars){
				echo "<div class='col-12 col-sm-6 col-md-3 col-lg-2'>
						<div class= 'canvas'>
							<a href='film.php?film=".$similars->id."'>
					    <img src='".$similars->image."' alt=''/>
							<h4>".$similars->title."</h4>
							</a>
							</div>
					  </div>";
				};
				?>
      </div>
    </div>
	</section>

	<section id="cast">
	<div class="container">
	<h2  class="text-center">Full Cast</h2>
	<h4>Stars</h4>
    <div class="container">
      <div class="row">

	    	<?php
				$actorcount = 0;
				foreach ($film->actorList AS $cast){
					if ($actorcount !== 6) {
						echo '<div class="col-6 col-md-3 col-lg-2">
						<img src="'.$cast->image.'" alt=""/>
						<p><strong>Name:</strong> '.$cast->name.'</p>
						<p><strong>Act:</strong> '.$cast->asCharacter.'</p>
						</div>';
						$actorcount++;
					}
				};
				?>

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
