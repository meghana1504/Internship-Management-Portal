<!DOCTYPE HTML>
<?php //include('pro_ret.php'); ?>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main12.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="home_stud.php">Home</a>
						<a style="color:cornflowerblue;"  href="prof.php">Your Profile</a>
						<a href="worksta.php">Internships</a>
                    <a href="progress.php">Progress</a>
                    <a href="login.php">LogOut</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>		
		 
<div class="container">
<!--
  <ul style="list-style-type:none;">
  <li>Full Name : </li>
  <li>Email : </li>
  <li>Gender : </li>
  <li>College : </li>
  <li>Year : </li>
  <li>Branch : </li>
  <li>Mobile Number : </li>
  <li>Domain of Interests : </li>
  <li>Strengths and Achievements : </li>-->
     <?php
    session_start();
	$db2 = mysqli_connect('localhost','root','','finaln');
	
	if(isset($_POST['login']))
	{
	$id=mysqli_real_escape_string($db2,$_POST['name']);
	$sqlget = "SELECT * from profile where username='$id' ";
	$sqldata = mysqli_query($db2,$sqlget);
	if(mysqli_num_rows($sqldata)==1)
	{
	echo "<table>";
	echo "<tr><th>Username</th></tr>
		  <tr><th>First Name</th></tr>
		  <tr><th>Last Name</th></tr>
		  <tr><th>Gender</th></tr>
		  <tr><th>Mobile Number</th></tr>
		  <tr><th>College Name</th></tr>
		  <tr><th>Academic Year</th></tr>
		  <tr><th>Achievements</th></tr>
		  <tr><th>Interest 1</th></tr>
		  <tr><th>Interest 2</th></tr>
		  <tr><th>Interest 3</th></tr>	";
	while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
	{
		echo "<tr><th>";
		echo $row['username'];
		echo '</th></tr>';
		echo $row['fname1'];
		echo '</th></tr>';
		echo $row['lname1'];
		echo '</th></tr>';
		echo $row['gender1'];
		echo '</th></tr>';
		echo $row['mnub1'];
		echo '</th></tr>';
		echo $row['cname1'];
		echo '</th></tr>';
		echo $row['ayear1'];
		echo '</th></tr>';
		echo $row['branch1'];
		echo '</th></tr>';
		echo $row['achievements'];
		echo '</th></tr>';
		echo $row['interest1'];
		echo '</th></tr>';
		echo $row['interest2'];
		echo '</th></tr>';
		echo $row['interest3'];
		echo '</th></tr>';
	}
	echo"</table>";
	}
	}
	?>
         
<!--</ul>-->
  </div>

	</body>
</html>