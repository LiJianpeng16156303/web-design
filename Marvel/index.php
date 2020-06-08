<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvel Cinematic Universe</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
    <header id="home">
      <nav id="nav-wrap">
        <ul id="nav" class="nav">
          <li class="logo">
            <a href="index.php">
              <img src="images/logo.gif" alt="" />
           </a>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#box">Box Office</a></li>
          <li><a href="#music">Music</a></li>
          <li><a href="#contact">Contact</a></li>
     	  <li><a href="edit.php" class="glyphicon glyphicon-cog"></a></li>
		  </ul>
      </nav>
      <div class="row banner">
        <div class="banner-text">
          <h4>I Love You Three Thousand Times</h4>
        </div>
      </div>
    </header>

    <!-- about section -->
    <section id="about">
      <div class="row">
        <div class="three columns">
          <img class="profile-pic" src="images/Marvel-Studios-in-IMAX.jpg" alt="" />
        </div>
        <div class="nine columns main-col">
          <h2>Marvel Cinematic Universe</h2>
          <p>Marvel Movie Universe is a common overhead world centered on superhero movies. It is a series of films independently produced by Marvel Movie Industry based on characters in Marvel Comic Publications.</p>
          <p>Like the dominant universe in cartoons, it is built by common elements, settings, performances and roles through cross-border works.</p>
          <p>The Marvel Film Universe is independent of the Main Universe (Earth-616) and the Ultimate Universe (Earth-1610), numbered Earth-1999-616.</p>
          <div class="row">
            <div class="columns contact-details">
              <h2>The Avengers</h2>
              <p class="address">Iron Man, Captain America, Hulk, Thor, Black Widow, Hawkeye, Scarlet Witch, Quicksilver, Vision, War Machine, Falcon, Winter Soldier</p>
            </div>
            <div class="columns contact-details">
              <h2>Guardians of the Galaxy</h2>
              <p class="address">Star-Lord, Gamora, Rocket Raccoon, Groot, Drax the Destroyer, Mantis, Nebula</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- resume section -->
    <section id="resume">
      <div class="row education">
        <div class="three columns header-col">
          <h1>
            <span>Movie</span></h1>
        </div>
        <div class="nine columns main-col">
          <div class="row item">
            <div class="twelve columns">
              <h3>Phase I</h3>
              <p class="info">Iron Man, The Incredible Hulk, Iron Man 2, Thor, Captain America: The First Avenger, The Avengers.</p>
            </div>
          </div>
          <div class="row item">
            <div class="twelve columns">
              <h3>Phase II</h3>
              <p class="info">Iron Man 3, Thor: The Dark World, Captain America: The Winter Soldier, Guardians of the Galaxy, Avengers: Age of Ultron, Ant-Man.</p>
            </div>
          </div>
          <div class="row item">
            <div class="twelve columns">
              <h3>Phase III</h3>
              <p class="info">Captain America: Civil War, Doctor Strange, Guardians of the Galaxy Vol. 2, Spider-Man: Homecoming, Thor: Ragnarok, Black Panther, Avengers: Infinity War, Ant-Man and the Wasp, Captain Marvel, Avengers: Endgame, Spider-Man: Far From Home.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row work">
        <div class="three columns header-col">
          <h1>
            <span>TVplay</span></h1>
        </div>
        <div class="nine columns main-col">
          <div class="row item">
            <div class="twelve columns">
              <h3>ABC</h3>
              <p class="info">Agents of S.H.I.E.L.D., Agent Carter.</p></div>
          </div>
          <div class="row item">
            <div class="twelve columns">
              <h3>Netflix</h3>
              <p class="info">Daredevil, Jessica Jones, Iron Fist, Luke Cage, Defenders, Punisher.</p></div>
          </div>
          <div class="row item">
            <div class="twelve columns">
              <h3>Hulu</h3>
              <p class="info">Runaways, Ghost Rider, Daimon Hellstrom.</p></div>
          </div>
          <div class="row item">
            <div class="twelve columns">
              <h3>Freeform</h3>
              <p class="info">Cloak & Dagger.</p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- resume section end -->

    <!-- box section -->
  <section id="box">
	  <?php include 'var.php';?>
   <div class="row">
    <div class="twelve columns collapsed">
     <h1>Box Office</h1>
      <div id="box-wrapper" >
       <?php if(mysqli_num_rows($result)>0){
         while($row = mysqli_fetch_assoc($result)){ ?>
           <div class="columns box-item">
             <div class="item-wrap">
               <img src="<?php echo $row["imagesurl"]; ?>" alt=""/>
               <div class="overlay">
                 <div class="box-item-meta">
                   <h5><?php echo $row["moviename"];?></h5>
	  		              <br>
                       <p><?php echo $row["date"];?></p>
	  		              <br>
                        <table>
                          <tbody>
                            <tr>
                              <th scope="row">North America Box Office:</th>
                              <td><?php echo $row["nabo"];?></td>
                            </tr>
                            <tr>
                              <th scope="row">Other regional box office:</th>
                              <td><?php echo $row["orbo"];?></td>
                            </tr>
                            <tr>
                              <th scope="row">Global box office:</th>
                              <td><?php echo $row["gbo"];?></td>
                            </tr>
                            <tr>
                              <th scope="row">North American box office rankings:</th>
                              <td><?php echo  $row["nabor"];?></td>
                            </tr>
                            <tr>
                              <th scope="row">Global box office rankings:</th>
                              <td><?php echo $row["gbor"];?></td>
                            </tr>
                            <tr>
                              <th scope="row">cost:</th>
                              <td><?php echo $row["cost"];?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
          <?php }} ?>
        </div>
      </div>
	<div class="prev">
			<?php
			if ($movieid >"1" ){
				echo "<a href='$left_page'><button>prev</button></a>";
			}
			?>
   	</div>
	   <div class="next">
			<?php
			if ($movieid <"20" ){
				echo "<a href='$right_page'><button>next</button></a>";
			}
			?>

	   </div>
	  </div>
  </section>
  <!-- box section end -->

  <!-- music section -->
  <section id="music">
    <?php include 'config.php';?>
    <div class="row">
      <div class="music">
	       <div class="musicphoto">
		         <img src="<?php echo $imgurl; ?>" alt=""/>
	       </div>
         <div class="information">
	        <h1>The Avengers</h1>
	        <br>
	        <p>Alan Silvestri</p>
          	<br>
          	<p>The Avengers </p>
          	<br>
	       </div>
          	<div class="player">
          		<div class="left">
          			<?php
          			if ($musicid != 1){
          				echo "<a href='$prev_page'><button class='glyphicon glyphicon-step-backward'></button></a>";
          			}
          			?>
          		</div>
				<div class="audio">
          			<audio src="<?php echo $audiourl; ?>" controls="controls" ></audio>
				</div>
          		<div class="right">
          			<?php
          			if (mysqli_num_rows($result2) != $musicid){
          				echo "<a href='$next_page'><button class='glyphicon glyphicon-step-forward'></button></a>";
          			}
          			?>
          		</div>
	          </div>
       </div>
   </div>
  </section>
  <!-- music section end -->

  <!-- contact section -->
  <section id="contact">
    <div class="container">
      <h1>Contact Us</h1>
      <br>
      <form action="createaccount.php" method="post" class="container1">
        <input name="name" id="name" type="text" placeholder="Your name...">
        <br>
        <input name="email" id="email" type="email" placeholder="Email Address...">
        <br>
        <textarea name="comments" id="comments" cols="" rows="" placeholder="Message..."></textarea>
        <br>
        <input type="submit" name="send" class="send" value="Send">
		</form>
		<form action="upload_file.php" method="post" enctype="multipart/form-data"class="container2">
		<label for="file">If you have any better pictures to share<br> please upload your pictures.</label>
		<br>
		<input type="file" name="file" id="file" />
		<br>
		<input type="submit" name="submit" class="submit" value="Upload" />
		</form>

    </div>
  </section>
  <!-- contact section -->

  <footer>
    <p>Copyright © 2019 Li Jianpeng. All rights reserved</p>
  </footer>

  </body>
  </html>
