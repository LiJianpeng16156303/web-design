<?php
// Image Suffixes Allowed to Upload
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // Get the file suffix name
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2048000)   // less than 2000 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "Upload File Name: " . $_FILES["file"]["name"] . "<br>";
		echo "Upload File Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Upload File Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Location Of Temporary File Storage: " . $_FILES["file"]["tmp_name"] . "<br>";

		// Determine whether the upload directory in the current directory exists
		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo '<script language="JavaScript">;alert("The File Already Exists!");location.href="index.php";</script>;';
		}
		else
		{
			// If the upload directory does not exist, upload the file to the upload directory
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
			echo "File Storage: " . "upload/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo '<script language="JavaScript">;alert("Document format does not conform!");location.href="index.php";</script>;';
}
?>
