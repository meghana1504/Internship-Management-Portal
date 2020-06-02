<!DOCTYPE HTML>
<?php include'server2.php' ?>

<html>
	<head>
		<title>CompHome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="e.css" />
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-modal-content{
	background-color: lightblue ;
}
</style>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a  href="ad_home.php">Home</a>
						<a href="ad_upload.php">Upload Task</a>
						<!--<a href="downloads.php">Available Tasks</a>-->
						<a style="color:cornflowerblue;" href="start2.php">taken tasks </a>
                       <a href="ad_progress.php">Overall analysis</a>
					<a href="ad_logout.php">Logout</a>
					</nav>
				</div>
			</header>
			
			<table id="t01">
<thead>
	
    <th>ID</th>
    <th>USERNAME</th>
    <th>CATEGORY</th>
    <th>JOB TITLE</th>
    <th>PROB STATE</th>
    <th> RECEIVED FILE</th>
	<th>RATING</th>
	<th>PAYMENT</th>

	
    
</thead>

<tbody>
    <CENTER><H2>JOBS WHICH HAVE BEEN TAKEN ARE:</H2></CENTER>

  <?php foreach ($files as $file): ?>
	
	  <?php	

		if ($file['start_task'] == 1) 
		{
			?>
		<tr>
		
      <td><?php echo $file['id']; ?></td>
<td><?php echo $file['username'];?></td>
      <td><?php echo $file['category']; ?></td>
	  
	    <td><?php echo $file['job_title']; ?></td>
		
      <td><a href="start2.php?file_id=<?php echo $file['id'] ?>"><?php echo $file['name']?></a></td>
	   <td><a href="start2.php?file_id1=<?php echo $file['id'] ?>"><?php echo $file['submitted']; ?></a></td>
	 	   <td><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Rate Task</button></td>
            

    
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    
<p align='center'> Rating </p>       
          <form  method="post"   enctype="multipart/form-data">
	   <p align='center'>CODE EFFICIENCY : 
		<input type="radio" name="1" value="1" /> 1
    <input type="radio" name="1" value="2" /> 2 
	<input type="radio" name="1" value="3" /> 3
    <input type="radio" name="1" value="4" /> 4 
	<input type="radio" name="1" value="5" /> 5
    <input type="radio" name="1" value="6" /> 6 
	<input type="radio" name="1" value="7" /> 7
    <input type="radio" name="1" value="8" /> 8 
	<input type="radio" name="1" value="9" /> 9
    <input type="radio" name="1" value="10" /> 10 </p>
	
	 <p align='center'>ADAPTABILITY : 
		<input type="radio" name="2" value="1" /> 1
    <input type="radio" name="2" value="2" /> 2 
	<input type="radio" name="2" value="3" /> 3
    <input type="radio" name="2" value="4" /> 4 
	<input type="radio" name="2" value="5" /> 5
    <input type="radio" name="2" value="6" /> 6 
	<input type="radio" name="2" value="7" /> 7
    <input type="radio" name="2" value="8" /> 8 
	<input type="radio" name="2" value="9" /> 9
    <input type="radio" name="2" value="10" /> 10 </p>
	
	 <p align='center'> READABILITY: 
		<input type="radio" name="3" value="1" /> 1
    <input type="radio" name="3" value="2" /> 2 
	<input type="radio" name="3" value="3" /> 3
    <input type="radio" name="3" value="4" /> 4 
	<input type="radio" name="3" value="5" /> 5
    <input type="radio" name="3" value="6" /> 6 
	<input type="radio" name="3" value="7" /> 7
    <input type="radio" name="3" value="8" /> 8 
	<input type="radio" name="3" value="9" /> 9
    <input type="radio" name="3" value="10" /> 10 </p>
	
	<p align='center'> TIME TAKEN: 
		<input type="radio" name="4" value="1" /> 1
    <input type="radio" name="4" value="2" /> 2 
	<input type="radio" name="4" value="3" /> 3
    <input type="radio" name="4" value="4" /> 4 
	<input type="radio" name="4" value="5" /> 5
    <input type="radio" name="4" value="6" /> 6 
	<input type="radio" name="4" value="7" /> 7
    <input type="radio" name="4" value="8" /> 8 
	<input type="radio" name="4" value="9" /> 9
    <input type="radio" name="4" value="10" /> 10 </p>
	<br>
	<p align='center'>OVERALL PERFORMANCE : 
		<input type="radio" name="5" value="1" /> 1
    <input type="radio" name="5" value="2" /> 2 
	<input type="radio" name="5" value="3" /> 3
    <input type="radio" name="5" value="4" /> 4 
	<input type="radio" name="5" value="5" /> 5
    <input type="radio" name="5" value="6" /> 6 
	<input type="radio" name="5" value="7" /> 7
    <input type="radio" name="5" value="8" /> 8 
	<input type="radio" name="5" value="9" /> 9
    <input type="radio" name="5" value="10" /> 10 </p>
              
	<input type="submit" align='center' name='ratedone' value="done">
              </form>
	<br>
      </div>
    </div>
  </div>
  <form method="post" >
   <td> <input type="number" value=<?php echo $file['payment']; ?> name="lol" ></td>
   
	   <td><input type='submit' name="subpay" value="next" onclick="alert('You Can pay only once')" ></td>
</form>
    </tr>
    
		<?php } endforeach; ?>
</tbody>

</table>

	
	</body>
</html>