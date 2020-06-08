<html>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s16156303";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $filmname =$_POST['filmname'];
    $imdbid      =$_POST['imdbid'];
    $type =$_POST['type'];
    $region     =$_POST['region'];
    $year      =$_POST['year'];
    $poster =$_POST['poster'];

    if(empty($_POST['filmname'])){
      echo '<script language="JavaScript">;alert("Please input filmname!");location.href="create.php";</script>;';
    }
    elseif(empty($_POST['imdbid'])){
      echo '<script language="JavaScript">;alert("Please input imdbid!");location.href="create.php";</script>;';
    }
    elseif(empty($_POST['type'])){
      echo '<script language="JavaScript">;alert("Please input genres!");location.href="create.php";</script>;';
    }
    elseif(empty($_POST['region'])){
      echo '<script language="JavaScript">;alert("Please input countries!");location.href="create.php";</script>;';
    }
    elseif(empty($_POST['year'])){
      echo '<script language="JavaScript">;alert("Please input year!");location.href="create.php";</script>;';
    }
    elseif(empty($_POST['poster'])){
      echo '<script language="JavaScript">;alert("Please input poster!");location.href="create.php";</script>;';
    }

    else{
      $sql = "INSERT INTO films (filmname, imdbid,type,region,year,poster)
              VALUES ('$filmname', '$imdbid', '$type', '$region', '$year', '$poster')";


          if (mysqli_query($conn, $sql)){
            echo '<script language="JavaScript">;alert("Massage create successfully!");location.href="read.php";</script>;';
          }

          else{
            echo '<script language="JavaScript">;alert("Massage create failed!");location.href="create.php";</script>;';
          }
    }
?>

<h1>Enter a new record</h1>


</body>
</html>
