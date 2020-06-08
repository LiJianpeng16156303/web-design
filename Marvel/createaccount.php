
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
// If no name or comments is entered，a pop-up window will appear indicating that no name or comments is entered.
if(empty($_POST['name'])){
  echo '<script language="JavaScript">;alert("Please enter your name!");location.href="index.php";</script>;';
}
elseif(empty($_POST['comments'])){
  echo '<script language="JavaScript">;alert("Please enter your comments!");location.href="index.php";</script>;';
}
// Store name, email, comments in user table of marveldb database
else{
   $sql = "INSERT INTO user (name, email, comments) VALUES ('$_POST[name]','$_POST[email]','$_POST[comments]')";
   
      //If it successfully, it will tell you it has succeed.
      if (mysqli_query($conn, $sql)){
        echo '<script language="JavaScript">;alert("Massage send successfully!");location.href="index.php";</script>;';
      }

      //If it fails, it will tell you it has failed.
      else{
        echo '<script language="JavaScript">;alert("Massage send failed!");location.href="index.php";</script>;';
      }
}
?>
