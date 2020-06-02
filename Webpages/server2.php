<?php
session_start();

   
	$name="";
	$email="";
	$errors=array();
	$db2=mysqli_connect('localhost','root','mysroot','finaln');
/*

if(isset($_POST['register']))
	{
		
		$cat=mysqli_real_escape_string($db2,$_POST['cat']);
		$jobtitle=mysqli_real_escape_string($db2,$_POST['jobtitle']);
		$btn=mysqli_real_escape_string($db2,$_POST['btn']);
		$sdate=mysqli_real_escape_string($db2,$_POST['sdate']);
		$edate=mysqli_real_escape_string($db2,$_POST['edate']);
		$sqn="INSERT INTO admin_upload(job_cat,job_title,job_desc,start_date,end_date)
		VALUES('$cat','$jobtitle','$btn','$sdate','$edate')";
		$result=mysqli_query($db2, $sqn);
		
  if($result)
  {
    header("location:ad_upload.php");
  }
  else
  {
    echo  "<script>alert('Job Title already taken');</script>";
  }
}


*/
	if(isset($_POST['register']))
	{
		
		$name=mysqli_real_escape_string($db2,$_POST['name']);
		$email=mysqli_real_escape_string($db2,$_POST['email']);
		$psw=mysqli_real_escape_string($db2,$_POST['psw']);
		$pswn=mysqli_real_escape_string($db2,$_POST['psw_repeat']);
		
		if($psw==$pswn)
{
  //echo "same password";
  $sqn="INSERT INTO register1(username,email,password)
		VALUES('$name','$email','$psw')";
		$result=mysqli_query($db2, $sqn);
		
  if($result)
  {
    header("location:pro.php");
  }
  else{
    echo  "<script>alert('Username already taken');</script>";
  }
}
else{

  echo "<script>alert('password doesnt match');</script>";

}
}
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
		$interest1=mysqli_real_escape_string($db2,$_POST['interest1']);
		$interest2=mysqli_real_escape_string($db2,$_POST['interest2']);
		$interest3=mysqli_real_escape_string($db2,$_POST['interest3']);
		
  //echo "same password";
  $sqn2="INSERT INTO profile(username,fname1,lname1,gender1,mnub1,cname1,ayear1,branch1,achievements,interest1,interest2,interest3)
		VALUES('$name','$fname','$lname','$gender','$mnumber','$cname','$ayear','$branch','$achievements','$interest1','$interest2','$interest3')";
		$result=mysqli_query($db2, $sqn2);
		 header("location:success.php");
	}
	
	
	if(isset($_POST['login']))
	{
	$id=mysqli_real_escape_string($db2,$_POST['name']);
	$password=mysqli_real_escape_string($db2,$_POST['password']);
	
		$query1="SELECT * FROM register1 WHERE username='$id' AND password='$password'";
		$result1=mysqli_query($db2,$query1);
		$query2="insert into curr_user (user_name) values('$id')";
		$result2=mysqli_query($db2,$query2);		
		if(mysqli_num_rows($result1)==1)
		{
			$_SESSION['username']=$id;
			
			header('location:home_stud.php');
		}else
		{
			//header('location:login.php');
			echo  "<script>alert('wrong credentials');</script>";
			
		}
	}
	
	
	//admin verification
	
	if(isset($_POST['alogin'])){
	$id=mysqli_real_escape_string($db2,$_POST['name']);
	$password=mysqli_real_escape_string($db2,$_POST['password']);
	
		$query1="SELECT * FROM admin WHERE admin_username='$id' AND admin_password='$password'";
		$result1=mysqli_query($db2,$query1);
		if(mysqli_num_rows($result1)==1)
		{
			//$_SESSION['username']=$id;
			
			header('location:ad_home.php');
		}else
		{
			//header('location:login.php');
			echo  "<script>alert('wrong credentials');</script>";
			
		}
	}
	
	
$sql = "SELECT * FROM file";
$result = mysqli_query($db2, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['reg2'])) { // if save button on the form is clicked
    // name of the uploaded file
	
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;
	$cat2=mysqli_real_escape_string($db2,$_POST['cat2']);
		$jobtitle=mysqli_real_escape_string($db2,$_POST['jobtitle']);
		$edate=mysqli_real_escape_string($db2,$_POST['edate']);
		

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    

    if (!in_array($extension, ['zip', 'pdf', 'docx','txt','jpeg','jpg','png','doc','rar'])) {
        echo "You file extension must be .zip, .pdf or .docx ";
    } elseif ($_FILES['myfile']['size'] > 1000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sqln = "INSERT INTO file (category,job_title,e_date,name,downloads) VALUES ('$cat2','$jobtitle','$edate','$filename', 0)";
            if (mysqli_query($db2, $sqln)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sqlb = "SELECT * FROM file WHERE id=$id";
    $result = mysqli_query($db2, $sqlb);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
	
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE file SET downloads=$newCount WHERE id=$id";
        mysqli_query($db2, $updateQuery);
        exit;
    }

}
$sql = "SELECT * FROM file";
$result = mysqli_query($db2, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);




if (isset($_POST['sub'])) { // if save button on the form is clicked
    // name of the uploaded file
	

	
    $filename1 = $_FILES['myfile']['name'];
	

    // destination of the file on the server
    $destination = 'uploads/' . $filename1;
	/*$cat2=mysqli_real_escape_string($db2,$_POST['cat2']);
		$jobtitle=mysqli_real_escape_string($db2,$_POST['jobtitle']);
		$sdate=mysqli_real_escape_string($db2,$_POST['sdate']);
		$edate=mysqli_real_escape_string($db2,$_POST['edate']);
		*/

    // get the file extension
    $extension = pathinfo($filename1, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    
    if (!in_array($extension, ['zip', 'pdf', 'docx','txt','jpeg','jpg','png','doc','rar'])) 
	{
        echo  "<script>alert('file extension is not valid / You have already submitted');</script>";
    } 
	elseif ($_FILES['myfile']['size'] > 1000000000) 
	{ // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            //$sqln = "INSERT INTO file (category,job_title,s_date,e_date,name,downloads) VALUES ('$cat2','$jobtitle','$sdate','$edate','$filename', 0)";
			$a = $_SESSION['id'];
			$sqln1 = "update file set s_downloads=1 , submitted='$filename1' where id='$a' ";
			if (mysqli_query($db2, $sqln1)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
if (isset($_GET['file_id1'])) {
    $id = $_GET['file_id1'];

    // fetch file to download from database
    $sqlb = "SELECT * FROM file WHERE id=$id";
    $result = mysqli_query($db2, $sqlb);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['submitted'];
	echo $filepath;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['submitted']);
		echo"kooooo";
			

        // Now update downloads count
        $newCount = $file['s_downloads'] + 1;
        $updateQuery = "UPDATE file SET s_downloads=$newCount WHERE id=$id";
        mysqli_query($db2, $updateQuery);
        exit;
    }

}

//salary
if(isset($_POST['subpay']))
{	$r=$_SESSION['id'];
	$ta=mysqli_real_escape_string($db2,$_POST['lol']);
	
	$q5="update file set payment='$ta' where id='$r'";

	//$query1="insert into file1 (id,submitted,s_downloads) values()";
	
	mysqli_query($db2,$q5);
		header("location:start2.php");
		
	//header("location:yourtask.php");
	//$q1="select id,start_task from file";
	//echo date("y/m/d,h:i:sa");
	//echo $_SESSION['dt'];
	//echo"hii";
	
}
        if (isset($_POST['ratedone']))
		{
            $q1 = $_POST['1'];
             $q2 = $_POST['2'];
            $q3 = $_POST['3'];
            $q4 = $_POST['4'];
            $q5 = $_POST['5'];
            $r=$_SESSION['id'];
            $q6="update file set efficiency='$q1',adaptability='$q2',readability='$q3',time='$q4',overall='$q5' where id='$r'";
            mysqli_query($db2,$q6);
        }
		


?>