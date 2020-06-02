<!DOCTYPE HTML>	
<?php
session_start();
?>
<html>
	<head>
		<title>LOG OUT</title>
		<link rel="stylesheet" href="r.css" />
	</head>
	<body>
	<form method="post" action="ad_logout.php">
	<h2><center>LOGGED  OUT  SUCCESFULLY !!!</center></h2>
<button type="submit" class="registerbtn" name="reg" formaction="ad_login.php" >LOGIN AGAIN</button>
<button type="submit" class="registerbtn" name="reg" formaction="ad_home.php" >BACK HOME</button>
	</form>
	</body>
	</html>
<?php
session_destroy(); 
//echo"logged out";	
//header("location:/wlogout.php"); //to redirect back to "index.php" after logging out
exit();
?>
