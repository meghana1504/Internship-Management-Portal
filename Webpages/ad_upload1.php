
<!DOCTYPE html>
<?php include(server2.php); ?>
<html>
<head>
     <title>Admin Upload</title>
	<style>
	
	
	</style>
         <link rel="stylesheet" href="r.css">
		 <link rel="stylesheet" href="main11.css">
     </head>
    <body>
	<header id="header">
				<div class="inner">
					<nav id="nav">
					<a href="ad_home.php">Home</a>
						<a style="color:cornflowerblue;" href="ad_upload.php">Upload Task</a>
						
						<a href="ad_avail.php">Available Tasks</a>
                    <a href="progress.php">Student Progress</a>
                    <!--<a href="logout.php">LogOut</a>-->
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
	<h1><center >Assign Jobs :</center></h1>
	<form method="post" enctype="multipart/form-data">

	<div class="container">
      <label for="cat"><b>Category</br></label>
    <input type="text" placeholder="Enter Category" name="cat" required>
      
    <label for="jobtitle"><b>Job Title</br></label>
    <input type="text" placeholder="Enter Title Of Job" name="jobtitle" required>
	
	 <label for="jobdesc"><b>Job Description:</br></label></br>
	 <?php
	$dbh = new PDO("mysql:host=localhost;dbname=finaln","root","");
	echo"ehey1";
	if(isset($_POST['aa']))
	{
		echo"ehey2";
		$name = $_FILES['myfile']['name'];
		$type = $_FILES['myfile']['type'];
		$data = file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt = $dbh->prepare("insert into admin_upload values(?,?,'',?,?,?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$type);
		$stmt->bindParam(3,$data);
		$stmt->execute();
	}
	?>
	<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="myfile"></input>
	<button name='aa' >UPLOAD </button>
	</form>
	<p></p>
	
	<ol>
	<label for="sdate"><b>Start Date</br></label></br>
    <input type="date" placeholder="Enter Start Date" name="sdate" required></br>
	
	<label for="edate"><b>End Date</br></label></br>
    <input type="date" placeholder="Enter End Date" name="edate" required></br>
	
	<button type="submit" name="register" value="Next" class="registerbtn" >Submit</button></a>


	<?php
	$stat = $dbh->prepare("select * from admin_upload");
	$stat->execute();
	while($row = $stat->fetch())
	{ echo "<li><a href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
	}
	?>
	
	
	
	<p></p>
  </div>
  
</form>	
    </body>
</html>