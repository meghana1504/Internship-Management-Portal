<html>
<head>
     <title>Database Display</title>
	 <style type="text/css">
	 table
	 { border: 2px solid red;
	   background-color:#FFC;
	 }
	 th
	 {
		 border-bottom : 5px solid #000;
	 }
	 td
	 {
		 border-bottom : 5px solid #666;
	 }
	 tr
	 {
		 border-bottom : 5px solid #666;
	 }
	 
	 </style>
</head>
   <body>
   <h1>data is:</h1>
   <?php
    //session_start();
	echo"hiii";
	$db2 = mysqli_connect('localhost','root','','finaln');
	echo"hdkjh";
	
	//if(isset($_POST['login']))

	//$id=mysqli_real_escape_string($db2,$_POST['name']);
	$sqlget = "SELECT * from profile";
	$sqldata = mysqli_query($db2,$sqlget);
	echo"hdkjh";
	if(mysqli_num_rows($sqldata)>0)
	{
	
	while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
	{
		
		
		echo"hdkjh";
		echo "<tr><th>";
		echo $row['username'];
		echo '</th></tr>';
		echo $row['fname1'];
		echo '</th></tr>';
		echo $row['lname1'];
		echo '</th></tr>';
		echo $row['gender1'];
		echo '</th></tr>';
		echo $row['mnub1'];
		echo '</th></tr>';
		echo $row['cname1'];
		echo '</th></tr>';
		echo $row['ayear1'];
		echo '</th></tr>';
		echo $row['branch1'];
		echo '</th></tr>';
		echo $row['achievements'];
		echo '</th></tr>';
		echo $row['interest1'];
		echo '</th></tr>';
		echo $row['interest2'];
		echo '</th></tr>';
		echo $row['interest3'];
		echo '</th></tr>';
	}
	echo"</table>";
	}
	 
	//else{
		//echo"<script>alert('Wrong Credentials !!');</script>";
		//echo"THE DATA IS NOT AVAILABLE FOR THE USERNAME WHICH YOU HAVE ENTERED!!";

	
	
	
	//else{echo"what is this";}

	?>
  
</form>	
    </body>
</html>