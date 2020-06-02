<!DOCTYPE HTML>
<?php include('server2.php'); ?>

<html>
	<head>
	<style>
	.inner
	{color:white;}

	</style>
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
						<a style="color:cornflowerblue;"  href="pro_ret.php">Your Profile</a>
						<a href="worksta.php">Internships</a>
			         <a href="yourtask.php">your tasks</a>
                    <a href="progress.php">Progress</a>
                    <a href="logout.php">LogOut</a>
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
    //session_start();
	$db2 = mysqli_connect('localhost','root','mysroot','finaln');
	
	//if(isset($_POST['login']))
	//{
	//$username=mysqli_real_escape_string($db2,$_POST['name']);
	//echo $_SESSION['username'];
	
	$sqlget = "SELECT * from profile where username='{$_SESSION['username']}' ";
	$sqldata = mysqli_query($db2,$sqlget);
	if(mysqli_num_rows($sqldata)==1)
	
	{while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
		
	{?>
		<table>
		<align>		  
		  <strong>Username :<?php echo $row['username'] ?></strong></br>
		  <strong> First Name :<?php echo $row['fname1'] ?> </strong></br>
		  <strong> Last Name :<?php echo $row['lname1'] ?> </strong></br>
		  <strong> Gender :<?php echo $row['gender1'] ?> </strong></br>
		  <strong>  Mobile Number :<?php echo $row['mnub1'] ?> </strong></br> 
		  <strong>  College Name :<?php echo $row['cname1'] ?> </strong> </br>
		  <strong>  Academic Year :<?php echo $row['ayear1'] ?> </strong> </br>
		  <strong>  Achievements  :<?php echo $row['achievements'] ?> </strong></br> 
		  <!--<strong>  Interest 1 :<?php echo $row['interest1'] ?> </strong> </br>
		  <strong>  Interest 2 :<?php echo $row['interest2'] ?> </strong> </br>
		  <strong>  Interest 3 :<?php echo $row['interest3'] ?> </strong> </br>
		  -->
		  
		  
		  </align>
		  </table>
	<?php 
	}
	}?>
	
	

  </div>

	</body>
</html>