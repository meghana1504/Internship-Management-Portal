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
	 
	 </style>
	 
   </head>
   <body>
   <h1><center >data is:</center></h1>
   <form method="post" action="server2.php">
	<?php>
	
	$db2=mysqli_connect('localhost','root','','finaln');
	$sqlget = "SELECT * FROM profile";
	$sqldata= mysqli_query($db2,$sqlget);
	echo "<table>";
	echo "<tr><th>username</th><th> First Name</th><th> Last Name </th><th>Gender</th><th>Mobile No</th><th>College Name</th><th>Academic Year</th><th>Branch</th><th>Achievements</th><th>Interest1</th><th>Interest2</th><th>Interest3</th></tr>"
	while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
	{
		echo "<tr><td>";
		echo $row['username'];
		echo '</td><td>';
		echo $row['fname1'];
		echo '</td><td>';
		echo $row['lname1'];
		echo '</td><td>';
		echo $row['gender1'];
		echo '</td><td>';
		echo $row['mnub1'];
		echo '</td><td>';
		echo $row['cname1'];
		echo '</td><td>';
		echo $row['ayear1'];
		echo '</td><td>';
		echo $row['branch1'];
		echo '</td><td>';
		echo $row['achievements'];
		echo '</td><td>';
		echo $row['interest1'];
		echo '</td><td>';
		echo $row['interest2'];
		echo '</td><td>';
		echo $row['interest3'];
		echo '</td></tr>';
	}
	echo"</table>";
	?>
  
</form>	
    </body>
</html>