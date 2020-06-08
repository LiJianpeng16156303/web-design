<?php

   $servername = "localhost"; //Create a varible contains the database name
   $username   = "root"; //Create a varible contains the database username
   $password   = ""; //Create a varible contains the database password
   $dbname     = "marveldb"; //Create a varible contains the database dbname
   $movieid    = 0 ; //Create a varible contains the movieid
   $per = 4 ; // Create a query to limit the maximum number of records returned

   $page2      = "index.php?movieid=";//Create a varible contains the page2,Read address bar information
   //Create a varible contains the page1,If movieid+ 4 or - 4, the variable switches
   if(isset($_GET["movieid"])){
		 $movieid= $_GET["movieid"];
	 }
   $left       = $movieid- 4;
   $right      = $movieid+ 4;
   $left_page  = $page2.$left;
   $right_page = $page2.$right;

   // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname );
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Set the SQL query
      // The query below will 'select' the movieid,moviename,date,nabo,orbo,gbo,nabor,gbor,cost,imagesurl from the onlineprofile table we created earlier.
      // It then uses the limit clause, which means that it qualifies the query record and returns the maximum number (4) of records.
      $sql      = "SELECT movieid, moviename,date,nabo,orbo,gbo,nabor,gbor,cost,imagesurl FROM movie LIMIT $movieid, $per";
      $sql2     = "SELECT * FROM movie";
      $countSQL = "SELECT count(*) FROM movie";
      $count    = mysqli_fetch_assoc(mysqli_query($conn, $countSQL))["count(*)"]; //Data volume

      //The below code then queries the database using the information from $conn and $sql.
      $result  = mysqli_query($conn, $sql);
      $result2 = mysqli_query($conn, $sql2);
?>
