
<?php include 'server2.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Your Progress</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main1.css" />
			<link rel="stylesheet" href="stylefile.css">
	</head>
	<body background = "sb.jpeg">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="home_stud.php">Home</a>
						<a href="prof.php">Your Profile</a>
						<a href="worksta.php">Internships</a>
						<a style="color:cornflowerblue;"href="yourtask.php">your tasks</a>
                    <a   href="progress.php">Progress</a>
                    <a href="logout.php">LogOut</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
<table>
<thead>
    <th>CATEGORY</th>
    <th>JOB TITLE</th>
	  <th>END DATE</th>
	  	   <th>CHOOSE FILE</th>
	   <th>SUBMIT</th>
  <th>STATUS</th>
   <th>PAYMENT</th>
</thead>
<CENTER><H2>RECORDS</H2></center>
<form  method="post"   enctype="multipart/form-data">
  <?php foreach ($files as $file): ?>
	
	  <?php	

		if ($file['username'] == $_SESSION['username']) 
		{
		$_SESSION['id']=$file['id'];
		?>
		<tr>
      <td><?php echo $file['category']; ?></td>
	    <td><?php echo $file['job_title']; ?></td>
	    <td><?php echo $file['e_date']; ?></td>
		<td><input type="File" name="myfile" ></br></td>
		<td><button type="submit" name="sub" value="Next" class="registerbtn" >SUBMIT</button></br></td>
		<?php if ($file['submitted']==NULL and $file['s_downloads']==NULL)
		{ ?>
						<td><p style="color:green;">Ongoing</p></td>
		<?php } 
		else{?>
			
			<td><p style="color:red;">Completed</p></td>
			<td><?php echo $file['payment']; ?></td>
		<?php }?>
		
		
    </tr>
	
		<?php } endforeach; ?>
		
		</form>
</tbody>
</table>
	</body>
</html>
<?php

?>