
<?php
session_start();
$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "marveldb"; //Create a varible contains the database dbname
$conn = mysqli_connect($servername, $username, $password, $dbname );
$id = $_GET["id"];
$sql  = "SELECT movieid, moviename,date,nabo,orbo,gbo,nabor,gbor,cost,imagesurl FROM movie WHERE movieid = $id";

    $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
         $movieid    = $row["movieid"];
         $moviename  = $row["moviename"];
         $date       = $row["date"];
         $nabo       = $row["nabo"];
         $orbo       = $row["orbo"];
         $gbo        = $row["gbo"];
         $nabor      = $row["nabor"];
         $gbor       = $row["gbor"];
         $cost       = $row["cost"];
         $imagesurl  = $row["imagesurl"];
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
    <form action="updatemovie.php" method="POST">
	<div class="left">
    <p>movieid</p>   <input type="text" value="<?php echo $movieid;?>" name="movieid">
    <p>moviename</p> <input type="text" value="<?php echo $moviename;?>" name="moviename">
    <p>date</p>      <input type="text" value="<?php echo $date;?>" name="date">
    <p>nabo</p>      <input type="text" value="<?php echo $nabo;?>" name="nabo">
    <p>orbo</p>      <input type="text" value="<?php echo $orbo;?>" name="orbo">
	</div>

	<div class="right">
    <p>gbo</p>       <input type="text" value="<?php echo $gbo;?>" name="gbo">
    <p>nabor</p>     <input type="text" value="<?php echo $nabor;?>" name="nabor">
    <p>gbor</p>      <input type="text" value="<?php echo $gbor;?>" name="gbor">
    <p>cost</p>      <input type="text" value="<?php echo $cost;?>" name="cost">
    <p>imagesurl</p> <input type="text" value="<?php echo $imagesurl;?>" name="imagesurl">
	</div>
  
	<input type="submit" name="submit" class="submit" value="submit" />
    </form>
</body>
</html>
