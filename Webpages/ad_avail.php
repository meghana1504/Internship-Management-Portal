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
	$db2 = mysqli_connect('localhost','root','','finaln');
//if(isset($_POST['register']))
	//{
	echo"hey1";
	$sqlget = "SELECT * from admin_upload  ";
	$sqldata = mysqli_query($db2,$sqlget);
	if(mysqli_num_rows($sqldata)>0)	
	echo"hii";
	{
	while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
	{
		echo "<tr><th>";
		echo $row['job_cat'];
		echo '</th></tr>';
		echo $row['job_title'];
		echo '</th></tr>';
		echo $row['id'];
		echo '</th></tr>';
		echo $row['file'];
		echo '</th></tr>';
		echo $row['start_date'];
		echo '</th></tr>';
		echo $row['end_date'];
		echo '</th></tr>';
		
	}
	
	echo"</table>";
	}
	

	?>
  
</form>	
    </body>
</html>