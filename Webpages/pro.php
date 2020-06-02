<?php include('server3.php'); ?> 
<!DOCTYPE html>
<html>
     
     <head>
	 <title>Profile Creation</title>
	 <style>
	 h4{
	 color:#FFFFFF;
	 }
     radio
	 {text-decoration :"color:#FFFFFF"}
	 .new 
	 {
	 margin-left: 460px;
     margin-right: 460px;
     margin-top: 30px;
     background: transparent;
	 color:#f1f1f1;
     }
	 </style>
         <link rel="stylesheet" href="r.css">
     </head>
    <body>
	<h1><center >Create Profile</center></h1>
<form action="server3.php" method="post">
  <div class="container">
	<label for=name><b>Username :</b></label>
    <input type="text" placeholder="Enter UserName" name="name" required>


    <label for=fname><b>First Name :</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for=lname><b>Last Name :</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>  
	
	<label for=gender><b>Gender :</b></label></br>
    <input type="radio" name="f" value="male" /> Male
    <input type="radio" name="f" value="female" /> Female <br/></br>
	
    <label for=mnumber><b>Mobile Number :</b></label>
    <input type="number" placeholder="Enter Mobile Number" name="mnumber" required>

    <label for=cname><b>College Name:</b></label>
    <input type="text" placeholder="Enter College Name" name="cname" required>

    <label for=ayear><b>Academic Year :</b></label>
    <input type="number" placeholder="Enter Academic Year" name="ayear" required>

	<label for=branch><b>Branch :</b></label>
    <input type="text" placeholder="Enter Branch" name="branch" required>
	
	<label for=ach><b>  Strength and Achievements :</b></label>
    <input type="text" placeholder="Enter your Strength and Achievements" name="ach" required>
	

	<!--<label for=choice></label></label>
	<h4>Tell Us What Are Your Field Of Interests :</h4>
	</div>
	<div class = "new">
<input list="interests" name="interest1" >
  <datalist id="interests" class=drop>
    <option value="Data Science">
	<option value="Cloud Computing">
	<option value="Data Analysis">
    <option value="Networking">
    <option value="Web Development">
    <option value="App Development">
    <option value="Database Management">
  </datalist>
      <label for="interest"><b>Field Of Interest 1</b></label>
	  <p></p>
<input list="interests" name="interest2" >
  <datalist id="interests" class=drop>
    <option value="Data Science">
	<option value="Cloud Computing">
	<option value="Data Analysis">
    <option value="Networking">
    <option value="Web Development">
    <option value="App Development">
    <option value="Database Management">
  </datalist>
      <label for="interest"><b>Field Of Interest 2</br></b></label>
      <p></p>
<input list="interests" name="interest3" >
  <datalist id="interests" class=drop>
    <option value="Data Science">
	<option value="Cloud Computing">
	<option value="Data Analysis">
    <option value="Networking">
    <option value="Web Development">
    <option value="App Development">
    <option value="Database Management">
  </datalist>
      <label for="interest"><b>Field Of Interest 3</b></label></br>
      <p></p>
    -->
	<button type="submit" class="registerbtn" value="next" name="reg" >Create Profile</button>
	
  </div>
</form>
    </body>
</html>