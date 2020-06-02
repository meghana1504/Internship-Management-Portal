<?php include 'server2.php';?>

<!DOCTYPE html>
<html>
<style>

</style>
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
<CENTER><H2>HERE ARE THE JOBS FOR YOU IN ANDROID !!</H2></center>
<form action="ad_server.php" method="post">
  <?php foreach ($files as $file): ?>
	
	  <?php	

		if ($file['category'] == "Android Development" and $file['start_task']==0 ) 
	
		{?>
		<?php $_SESSION['a']=$file['id']; 
		
					
?>

		<tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['category']; ?></td>
	    <td><?php echo $file['job_title']; ?></td>
	    <td><?php echo $file['e_date']; ?></td>
		 <td><?php echo $file['name']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
	  <td><button type="submit" class="registerbtn" name="abtn" >Start task</button></td>
    </tr>
	
		<?php } endforeach; ?>
</tbody>
</table>
</form>
</body>
</html>