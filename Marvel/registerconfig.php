<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "marveldb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// If no username or password is entered，a pop-up window will appear indicating that no username or password is entered.
if(empty($_POST['username'])){
echo '<script language="JavaScript">;alert("Please enter your username!");location.href="login.php";</script>;';
}
elseif(empty($_POST['password'])){
  echo '<script language="JavaScript">;alert("Please enter your password!");location.href="login.php";</script>;';
}
// Store username, email and password in admin table of marveldb database
 else{
$sql = "INSERT INTO admin (username, email, password) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";

      if (mysqli_query($conn, $sql)){
        echo '<script language="JavaScript">;alert("Sign up was successful! Now Sign in");location.href="login.php";</script>;';
      }

      //If it fails, it will tell you it has failed.
      else{
      	echo "user creation failed".$sql."<br>".mysqli_error($conn);
      }
}
?>
