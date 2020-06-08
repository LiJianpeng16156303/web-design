<?php
session_start();
$servername = "localhost"; //Create a varible contains the database name
$username   = "root"; //Create a varible contains the database username
$password   = ""; //Create a varible contains the database password
$dbname     = "s16156303"; //Create a varible contains the database dbname
$conn = mysqli_connect($servername, $username, $password, $dbname );
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($conn,"select username from admin where username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: signin.php");
}
?>
