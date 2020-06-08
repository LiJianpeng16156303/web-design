<?php

   $servername = "localhost"; //Create a varible contains the database name
   $username   = "root"; //Create a varible contains the database username
   $password   = ""; //Create a varible contains the database password
   $dbname     = "marveldb"; //Create a varible contains the database dbname
   $musicid    = 1; //Create a varible contains the musicid
   $page1      = "index.php?musicid="; //Create a varible contains the page1,Read address bar information

   if(isset($_GET["musicid"])){
		 $musicid = $_GET["musicid"]; //If you read the musicid in the address bar，Create a varible contains the musicid equal to read
	 }
   //Create a varible contains the prev and next,make them equal to musicid + 1 and - 1 for switching
   $prev = $musicid - 1;
   $next = $musicid + 1;
   $prev_page = $page1.$prev;
   $next_page = $page1.$next;

   // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname );
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      // Set the SQL query
      // The query below will 'select' the musicid, musicname, artist,album,imgurl,audiourl from the onlineprofile table we created earlier. It then uses the WHERE clause that means it will only return the record where the musicid is equal to 1.
      $sql  = "SELECT musicid, musicname, artist,album,imgurl,audiourl FROM music WHERE musicid = $musicid";
      $sql2 = "SELECT * FROM music";

      //The below code then queries the database using the information from $conn and $sql.
      $result = mysqli_query($conn, $sql);
      $result2 = mysqli_query($conn, $sql2);

      if(mysqli_num_rows($result)>0){
	       while($row = mysqli_fetch_assoc($result)){
		         $musicid    = $row["musicid"];
		         $musicname  = $row["musicname"];
		         $artist     = $row["artist"];
			   	   $album      = $row["album"];
		         $imgurl     = $row["imgurl"];
			   	   $audiourl   = $row["audiourl"];

           }
      }
?>
