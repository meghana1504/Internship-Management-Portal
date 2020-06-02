<!DOCTYPE HTML>	
<?php
include ('server2.php');
//session_start();
?>
<html>
	<head>
		<title>LOG OUT</title>
		<link rel="stylesheet" href="r.css" />
	</head>
	<body>
	<form method="post" action="logout.php">
	<h2><center>LOGGED  OUT  SUCCESFULLY !!!</center></h2>
<button type="submit" class="registerbtn" name="reg" formaction="login.php" >LOGIN AGAIN</button>
<button type="submit" class="registerbtn" name="reg" formaction="home.php" >BACK HOME</button>
	</form>
	</body>
	</html>
<?php
		$query3="truncate curr_user";
		$result3=mysqli_query($db2,$query3);

session_destroy(); 
//echo"logged out";	
//header("location:/wlogout.php"); //to redirect back to "index.php" after logging out
exit();
?>
