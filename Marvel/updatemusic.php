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
$sql = "UPDATE music SET
	musicid		= '".$_POST['musicid']."',
	musicname = '".$_POST['musicname']."',
	artist 		= '".$_POST['artist']."',
	album 		= '".$_POST['album']."',
	imgurl 		= '".$_POST['imgurl']."',
	audiourl 	= '".$_POST['audiourl']."'
	WHERE
	musicid 	= ".$_POST['musicid']."
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
