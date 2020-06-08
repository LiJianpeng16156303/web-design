<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film data create</title>
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

<section id="create">
  <div class="container">
    <h2 class="text-center">Create a new data</h2>
    <form class="form-horizontal" action="insert.php" method="post">
            <div class="row" style="padding: 20px 0">
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-1">Filmname:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="filmname" placeholder="Please input the filmname">
                </div>
                <label class="control-label col-lg-1">Imdbid:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="imdbid" placeholder="Please input the imdbid">
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-1">Genres:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="type" placeholder="Please input the genres">
                </div>
                <label class="control-label col-lg-1">Countries:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="region" placeholder="Please input the countries">
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-lg-1">Year:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="year" placeholder="Please input the year">
                </div>
                <label class="control-label col-lg-1">Poster:</label>
                <div class="col-lg-5 col-md-6">
                    <input class="form-control" type="text" name="poster" placeholder="Please input the poster">
                </div>
            </div>

            <button type="submit" class="btn btn-light">CREATE</button>
    </form>
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

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
