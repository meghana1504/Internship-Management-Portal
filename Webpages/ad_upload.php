<?php include 'server2.php'; ?>
<!DOCTYPE html>

<html>
<head>
     <title>Admin Upload</title>
	<style>
	
	
	</style>
         <link rel="stylesheet" href="m.css">

     </head>
    <body background = "aa1.jpeg">
	<header id="header">
	
				<div class="inner">
					<nav id="nav">
					<a href="ad_home.php">Home</a>
						<a style="color:cornflowerblue;" href="ad_upload.php">Upload Task</a>
						
						<!--<a href="ad_avail.php">Available Tasks</a>-->
						<a href="start2.php">Available Tasks</a>
                    <a href="ad_progress.php">Overall analysis</a>
					<a href="ad_logout.php">Logout</a>
					
                    <!--<a href="logout.php">LogOut</a>-->
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
	<h1><center >Upload Jobs :</center></h1>
	<form method="post" enctype="multipart/form-data">

	
	<center>
	<div class="container">
	      <label for="cat2"><b>Category</b></label>
	  <p></p>
<input list="Category" name="cat2" >
  <datalist id="Category" class=drop>
    <option value="Python Programming">
	<option value="Java Programming">
	<option value="C++ Programming">
		<option value="Android Development">
	<option value="Web Development">
  </datalist></br>
      
    <label for="jobtitle"><b>Job Title</br></label>
    <input type="text" placeholder="Enter Title Of Job" name="jobtitle" required></br>
	
	<!--<label for="sdate"><b>Start Date</br></label>
    <input type="date" placeholder="Enter Start Date" name="sdate" required></br>-->
	
	<label for="edate"><b>End Date</br></label>
    <input type="date" placeholder="Enter End Date" name="edate" required></br>
	
	<label for="jobdesc"><b>Job Description:</br></label>
	 <input type="File" name="myfile" ></br>
	<button type="submit" name="reg2" value="Next" class="registerbtn" >Submit</button></a>
	

	<!--</br><button type="submit" name="upload" value="Next" >Upload JD</button></a>
	</br><button type="submit" name="upload" value="Next" >Upload JD</button></a>
   
    <input type="text" placeholder="Enter Job Description" name="jobdesc" required></input></br></br>-->


	
	<p></p>
  </div></center>
  
</form>	
    </body>
</html>