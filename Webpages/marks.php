<?php include('mserver.php'); ?> 
<!doctype html>
<html>
<head>
	<center>
	<title>MARKS</title>
	</center>
</head>
<body>
<form action="marks.php" method="POST" enctype='multipart/form-data'>
	<div class='header' >
	<h4>enter marks:</h4><br/>
		<legend>
		<fieldset>
	marks1 : <br/>
	<input type="number" name = 'marks_1'><br/><br/>
	marks2 : <br/>
	<input type = 'number' name = 'marks_2' ></br></br>
	<button type = 'submit' name = 'm_btn' class == 'btn' formaction='marks.php' method="POST">submit</button>
	<button type = 'submit' name = 'p_btn' class == 'btn' formaction='new.py' method="POST">plot</button>
	
		</legend>
		</fieldset>
		
	</div>
	</form>
	</body>
</html>
