<?php
   
	$name="";
	$email="";
	$errors=array();
	$db1=mysqli_connect('localhost','root','','finaln');
	if(isset($_POST['register']))
	{
		
		$name=mysqli_real_escape_string($db1,$_POST['name']);
		$email=mysqli_real_escape_string($db1,$_POST['email']);
		$psw=mysqli_real_escape_string($db1,$_POST['psw']);
		$pswn=mysqli_real_escape_string($db1,$_POST['psw_repeat']);
		
	
	if(empty($name))
	{array_push($errors);}
	if(empty($email))
	{array_push($errors);}
	if(empty($psw))
	{array_push($errors);}
	if(empty($pswn))
	{array_push($errors);}
	if(empty($pswn))
		
	{array_push($errors);}
	if($psw!==$pswn)
	{array_push($errors);}

	
		
	
	if(count($errors)==0)
	{

		$sqn="INSERT INTO register1(username,email,password)
		VALUES('$name','$email','$psw')";
		mysqli_query($db1, $sqn);
		header("location:pro.php");
	}
	else
	{
		echo"try again";
	}
	}
	
	

	
?>