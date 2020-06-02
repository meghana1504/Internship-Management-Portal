
<?php include('server2.php'); ?> 
<!DOCTYPE html>
<html>
<head>
     <title>Registration</title>
     
         <link rel="stylesheet" href="r.css">
     </head>
    <body>
	<h1><center >Registration</center></h1>
	<form method="post" action="server2.php">
	<?php include('errors.php'); ?>

	<div class="container">
      <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter UserName" name="name" required>
      
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw_repeat" required>
	
	<button type="submit" name="register" value="Next" class="registerbtn" >Register</button></a>

  </div>
  
</form>	
    </body>
</html>