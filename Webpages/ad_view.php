<?php
	$dbh = new PDO("mysql:host=localhost;dbname=finaln","root","");
	//$id = isset($_GET['id']) ?$_GET['id'] :"";
	$stat = $dbh->prepare("select * from admin_upload");
	//$stat->bindParam(1,$id);
	$stat->execute();
	$row = $stat->fetch();
	header('Content-Type:'.$row['mime']);
	echo $row['data'];
?>