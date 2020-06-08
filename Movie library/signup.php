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
            <li class="nav-item">
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
            <ul class="navbar-nav mr-auto">
  						<li class="nav-item active">
  							<a class="nav-link" href="signin.php">Sign in</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="signout.php">Sign out</a>
  						</li>
  					</ul>
          </form>
        </div>
      </div>
    </nav>

<div class="container">
<div class="form">
  <h2>Sign Up</h2>
  <form action="createaccount.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name="username" class="form-control"  placeholder="Please input your username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control"  placeholder="Please input your email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control"  placeholder="Please input your password">
    </div>
	  <div class="text-center">
    	<button type="submit" class="btn btn-outline-success">Sign Up</button>
	  </div>
  </form>
</div>
</div>



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
