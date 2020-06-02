<?php include 'server2.php';
//session_start();
?>

<!DOCTYPE html>
<html>

	<style>
	.cats h5,h2,center
	{
		font-size=20px;
		color:white;
		font-family:hybrid;
		text-transform:uppercase;
	
		
	}
	</style>
		<title>Internships</title>
		<meta charset="utf-8" />
		<meta name="viewport" content=" initial-scale=1, user-scalable=yes" />

		<link rel="stylesheet" href="stylefile.css">
	</head>
	<body>
	

		<!-- Header 
			<header id="header">
				<div class="inner">
					<nav id="nav">
						
					<a href="home_stud.php">Home</a>
					<a href="prof.php">Your Profile</a>
					<a style="color:cornflowerblue;" href="worksta.php">Internships</a>
                    <a href="progress.php">Progress</a>
                    <a href="logout.php">LogOut</a>
					</nav>
				</div>
				-->

<head>
	
  <meta charset="utf-8" />
  <link rel="stylesheet" href="stylefile.css">
  <title>Download files</title>
</head>
<section id="img">
<body background = "sb.jpeg" >
</section>
<table>
<thead>
    <th>ID</th>
    <th>CATEGORY</th>
    <th>JOB TITLE</th>
	  <th>END DATE</th>
	   <th>NAMES</th>
   <th>JOB DESCRIPTION</th>
   <th>ACTION</th>
</thead>
<tbody>
<CENTER><H2>HERE ARE THE JOBS FOR YOU IN JAVA !!</H2></center>
<form action="ad_server.php" method="post">


  <?php foreach ($files as $file): ?>
	
	  <?php	

		if ($file['category'] == "Java Programming" and $file['start_task']==0 ) 
	
		{?>
		<?php $_SESSION['j']=$file['id']; 
	
					
		?>
		<tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['category']; ?></td>
	    <td><?php echo $file['job_title']; ?></td>
	    
	    <td><?php echo $file['e_date']; ?></td>
		 <td><?php echo $file['name']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
	   <td><button type="submit" class="registerbtn" name="jbtn"   >Start task</button></td> 
	   
    </tr>
	
		<?php } endforeach; ?>
</tbody>
</table>
</form>
</body>
</html>