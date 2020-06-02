<?php 
include 'ad_server.php';
?>
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
    <th>ALLOTED TASK NAME</th>
    <th>RECEIVED FILE</th>
    <?php echo$file['start_task']; ?>
</thead>
<tbody>
<CENTER><H2>HERE ARE THE JOBS FOR YOU !!</H2></center>
<?php if((isset($_POST['jbtn'])) or (isset($_POST['cbtn'])) or (isset($_POST['pbtn'])) or (isset($_POST['abtn'])) or (isset($_POST['wbtn']))) 
{foreach ($files as $file): ?>

		<tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['category']; ?></td>
	    <td><?php echo $file['job_title']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
	
<?php endforeach; }?>
</tbody>
</table>

</body>
</html>