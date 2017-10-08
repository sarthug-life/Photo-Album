
<html>
<body>
	<h1>Photo Album</h1>
	<div id="pic"></div>
	<form action="" method="post">
		<input type="submit"  name="first" value="First">
		<input type="submit"  name="prev" value="Prev">
		<input type="submit"  name="next" value="Next">
		<input type="submit"  name="last" value="Last"> <br><br>
		<input type="submit"  name="Upload" value="Upload Image">
		<input type="submit"  name="logout" value="Log Out">
	</form>

	<?php 

	session_start();

	if ($_SESSION['access']!=1) 
{
	header("Location: index.php"); exit(); 
} 

	$dir = "images/*.*";
	$images = glob($dir);
	$size=sizeof($images);

	if (isset($_POST['next'])) $_SESSION['i']= ($_SESSION['i']+1)%$size;

	else if (isset($_POST['prev'])) 
	{
		$_SESSION['i'] = $_SESSION['i']-1 ;
		if ($_SESSION['i']==-1) $_SESSION['i']= $_SESSION['i']+$size ;
	}

	else if (isset($_POST['first'])) $_SESSION['i']=0;

	else if (isset($_POST['last'])) $_SESSION['i']=$size-1;

	else if (isset($_POST['Upload'])) 
	{
		header("location: new_upload.php");
		exit();
	}

	else if (isset($_POST['logout'])) 
	{
		header("location: index.php");
		session_destroy();
		exit();
	}

	$image=$images[$_SESSION['i']];
	echo '<img src="'.$image.'" width="500" />';
	?>

</body>
</html>