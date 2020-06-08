
<?php
session_start();
$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "marveldb"; //Create a varible contains the database dbname
$conn = mysqli_connect($servername, $username, $password, $dbname );
$id = $_GET["id"];
$sql  = "SELECT musicid, musicname, artist,album,imgurl,audiourl FROM music WHERE musicid = $id";

    $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
         $musicid    = $row["musicid"];
         $musicname  = $row["musicname"];
         $artist     = $row["artist"];
         $album      = $row["album"];
         $imgurl     = $row["imgurl"];
         $audiourl   = $row["audiourl"];
       }
   }
   ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvel Music</title>
    <link href="css/editmain.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="updatemusic.php" method="POST">
	<div class="left">
    <p>musicid</p>   <input type="text" value="<?php echo $musicid;?>" name="musicid">
    <p>musicname</p> <input type="text" value="<?php echo $musicname;?>" name="musicname">
    <p>artist</p>    <input type="text" value="<?php echo $artist;?>" name="artist">
	</div>

	<div class="right">
    <p>album</p>    <input type="text" value="<?php echo $album;?>" name="album">
    <p>imgurl</p>   <input type="text" value="<?php echo $imgurl;?>" name="imgurl">
    <p>audiourl</p> <input type="text" value="<?php echo $audiourl;?>" name="audiourl">
	</div>
  
	<input type="submit" name="submit" class="submit" value="Upload" />
    </form>
</body>
</html>
