<html>
<body>

	<?php
	
	session_start();
	$_SESSION['access']=0;

	$_SESSION['i']=0;
	$user = $_POST["user"]; 
	$pass = $_POST["pass"];

	if($user=="eval" && $pass=="eval")
	{ 
		$_SESSION['access']=1;
		header("Location: album.php"); exit(); 
	}
	else 
	{ 
		header("Location: index.php"); exit(); 
	}

		?>

</body>
</html>