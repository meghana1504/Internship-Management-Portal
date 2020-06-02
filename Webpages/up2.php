<!doctype html>
<html>
<head>
	<center>
	<style></style>
	<title>blob</title>
	</center>
</head>
<body>
	<?php
	$dbh = new PDO("mysql:host=localhost;dbname=test","root","");
	if(isset($_POST['btn']))
	{
		$name = $_FILES['myfile']['name'];
		$type = $_FILES['myfile']['type'];
		$data = file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt = $dbh->prepare("insert into myblob values('',?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$type);
		$stmt->bindParam(3,$data);
		$stmt->execute();
	}
	?>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="myfile"/>
	<button name='btn' >UPLOAD </button>
	</form>
	<p></p>
	
	<ol>
	<?php
	$stat = $dbh->prepare("select * from myblob");
	$stat->execute();
	while($row = $stat->fetch())
	{echo"<li><a href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
	}
	?>
	</ol>
	</body>
	</html>
	