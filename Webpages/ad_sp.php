<?php
	include("d_java.php");
	
	$db2=mysqli_connect('localhost','root','','finaln');
	
if(isset($_POST['sbtn']))
{
	$query1="update file set start_task =1 where id={$_SESSION['p']}";
	$res=mysqli_query($db2,$query1);
}