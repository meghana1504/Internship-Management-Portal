<?php include 'file.php';?>
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
    	 <th>START DATE</th>
	  <th>END DATE</th>
	   <th>NAMES</th>
   <th>JOB DESCRIPTION</th>
</thead>
<tbody>
<CENTER><H2>HERE ARE THE JOBS FOR YOU !!</H2></center>

 
 <?php foreach ($files as $file): ?>	
	  <?php	

		if ($file['category'] == "Java Programming") 
		{?>
		<tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['category']; ?></td>
	    <td><?php echo $file['job_title']; ?></td>
	    <td><?php echo $file['s_date']; ?></td>
	    <td><?php echo $file['e_date']; ?></td>
		 <td><?php echo $file['name']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
	
		<?php } endforeach; ?>
</tbody>
</table>

</body>
</html>