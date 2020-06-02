<?php
  session_start();
	$db2=mysqli_connect('localhost','root','','finaln');
	if(isset($_POST['reg']))
	{
		$name=mysqli_real_escape_string($db2,$_POST['name']);
		//$email=mysqli_real_escape_string($db2,$_POST['email']);
		//$psw=mysqli_real_escape_string($db2,$_POST['psw']);
		$fname=mysqli_real_escape_string($db2,$_POST['fname']);
		$lname=mysqli_real_escape_string($db2,$_POST['lname']);
		$gender=mysqli_real_escape_string($db2,$_POST['f']);
		$mnumber=mysqli_real_escape_string($db2,$_POST['mnumber']);
		$cname=mysqli_real_escape_string($db2,$_POST['cname']);
		$ayear=mysqli_real_escape_string($db2,$_POST['ayear']);
		$branch=mysqli_real_escape_string($db2,$_POST['branch']);
		$achievements=mysqli_real_escape_string($db2,$_POST['ach']);
		//$interest1=mysqli_real_escape_string($db2,$_POST['interest1']);
		//$interest2=mysqli_real_escape_string($db2,$_POST['interest2']);
		//$interest3=mysqli_real_escape_string($db2,$_POST['interest3']);
		
	
	
  //echo "same password";
  $sqn2="INSERT INTO profile(username,fname1,lname1,gender1,mnub1,cname1,ayear1,branch1,achievements)
		VALUES('$name','$fname','$lname','$gender','$mnumber','$cname','$ayear','$branch','$achievements')";
		$result=mysqli_query($db2, $sqn2);
		 header("location:success.php");
	}
		
		/*if(isset($_POST['reg'])){
	$id=mysqli_real_escape_string($db2,$_POST['name']);
	$password=mysqli_real_escape_string($db2,$_POST['password']);
	
		$query1="SELECT * FROM register1 WHERE username='$id' AND password='$password'";
		$result1=mysqli_query($db2,$query1);
		$query2 = "SELECT * from profile1 where username='$id'";
		$result2=mysqli_query($db2,$query2);
		if(mysqli_num_rows($result2)==1){
			header('location:home_stud.php');
		}else{
			echo  "<script>alert('wrong');</script>";
		}
	}
		
		
		if(isset($_POST['login'])){
	$id=mysqli_real_escape_string($db2,$_POST['name']);
	$password=mysqli_real_escape_string($db2,$_POST['password']);
	
		$query1="SELECT * FROM register1 WHERE username='$id' AND password='$password'";
		$result1=mysqli_query($db2,$query1);
		if(mysqli_num_rows($result1)==1)
		{
			header('location:home_stud.php');
		}else
		{
			echo  "<script>alert('wrong credentials');</script>";
		}
	}
  */
	
	
	
		
	
	?>