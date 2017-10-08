<html>
<body>
<?php
session_start();
if ($_SESSION['access']!=1) 
{
	header("Location: index.php"); exit(); 
} 

?>
	<a href="album.php">Go to Album</a>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload: 
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
		<input type="submit"  name="logout" value="Log Out">
	</form>

</body>
</html>