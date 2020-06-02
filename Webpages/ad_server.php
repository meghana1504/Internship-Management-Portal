<?php
    //session_start();
	
	$db2=mysqli_connect('localhost','root','','finaln');
	//echo $register1['username'];
	include 'server2.php';
	//echo $_SESSION['username'];
	//echo $un;
	$f=$_SESSION['username'];

	
if(isset($_POST['jbtn']))
{
	$query1="update file set start_task =1 , username= '$f' where id={$_SESSION['j']}";
	$res=mysqli_query($db2,$query1);
	header("location:yourtask.php");
	
	
	
	
	//echo $_SESSION['dt'];
	//echo"hii";
	
	
}

if(isset($_POST['cbtn']))
{
	$query1="update file set start_task =1 , username= '$f' where id={$_SESSION['c']}";
	$res=mysqli_query($db2,$query1);
	header("location:yourtask.php");
}

if(isset($_POST['abtn']))
{
	$query1="update file set start_task =1 , username= '$f' where id={$_SESSION['a']}";
	$res=mysqli_query($db2,$query1);
	header("location:yourtask.php");
}

if(isset($_POST['pbtn']))
{
	$query1="update file set start_task =1 , username= '$f' where id={$_SESSION['p']}";
	$res=mysqli_query($db2,$query1);
	header("location:yourtask.php");
	
}

if(isset($_POST['wbtn']))
{
	$query1="update file set start_task =1 , username= '$f' where id={$_SESSION['w']}";
	$res=mysqli_query($db2,$query1);
	header("location:yourtask.php");
}
?>