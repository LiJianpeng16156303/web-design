<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "marveldb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST"){
      // username and password sent from form

      $myusername=mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword=mysqli_real_escape_string($conn,$_POST['password']);

      $sql    ="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
      $result =mysqli_query($conn,$sql);
      $row    =mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count  =mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row.
      if($count==1){
      //session_register("myusername");
      $_SESSION['login_user']=$myusername;

      header("location: edit.php");
      }

      else{
      $error="Your Login Name or Password is invalid";
      }
}

// If Your Login Name or Password is invalid，a pop-up window will appear indicating that Your Login Name or Password is invalid.
if(!empty($error)) {
  echo '<script language="JavaScript">;alert("Your Login Name or Password is invalid!");location.href="login.php";</script>;';
 }
 ?>
