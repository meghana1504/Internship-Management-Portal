<?php

	session_start();
	$marks1="";
	$marks2="";
	$errors=array();
	$c1=mysqli_connect('localhost','root','','finaln');
	echo"connection established";
	if(isset($_POST['m_btn']))
	{
		echo"  ";
		$marks1=mysqli_real_escape_string($c1,$_POST['marks_1']);
		$marks2=mysqli_real_escape_string($c1,$_POST['marks_2']);
		
		if(empty($marks1))
	{
		array_push($errors,'marks1 is required');
		
	}	
		if(empty($marks2))
	{
		array_push($errors,'marks2 is required');
		
	}
	
	if(count($errors)==0)
	{

		$sq="INSERT INTO mark(m,j)
		VALUES('$marks1','$marks2')";
		mysqli_query($c1, $sq);
		
	}
	}
	
	echo"   enter the data here :"
?>