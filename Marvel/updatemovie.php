<?php

$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "marveldb"; //Create a varible contains the database dbname
$conn = mysqli_connect($servername, $username, $password, $dbname );

if(!$conn){
	die("Connection Failed");

}

//Write a SQL query that updates the database below.
//The SQL will start INSERT INTO...
$sql = "UPDATE movie SET
	movieid 	= '".$_POST['movieid']."',
	moviename = '".$_POST['moviename']."',
	date 			= '".$_POST['date']."',
	nabo 			= '".$_POST['nabo']."',
	orbo 			= '".$_POST['orbo']."',
	gbo 			= '".$_POST['gbo']."',
  nabor 		= '".$_POST['nabor']."',
	gbor 			= '".$_POST['gbor']."',
	cost			= '".$_POST['cost']."',
	imagesurl = '".$_POST['imagesurl']."'
	WHERE
	movieid 	= ".$_POST['movieid']."
	";


//If it is successful it will redirect you to the home page.
if (mysqli_query($conn, $sql)){
header("Location: index.php");
}
//If it fails, it will tell you it has failed.
else{
	echo "user creation failed".$sql."<br>".mysqli_error($conn);

}
?>
