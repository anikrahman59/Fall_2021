<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
</head>
<body>
	<h3>Registration Form</h3><hr>

	<form action="" method="POST" onsubmit="return validateForm()">
 
		<script type="text/javascript" src="../Js/js_file.js">

      </script>
      <p id ="error"></p>

		First Name :
		<input type="text" name="fname"> <br>

		Last Name :
		<input type="text" name="lname"> <br>

		Age :
		<input type="text" name="age"> <br>
	    
	    Designation :
	    <input type="radio" id="jp" name="Designation" value="Junior Programmer">
	          <label for="jp">Junior Programmer</label>
	    <input type="radio" id="sp" name="Designation" value="Senior Programmer">
	          <label for="sp">Senior Programmer</label>
	    <input type="radio" id="pl" name="Designation" value="Project Lead">
	          <label for="pl">Project Lead</label>
	          <br>

	Preferred Language:
	    <input type="checkbox" id="java" name="java" value="JAVA">
	    JAVA
	    <input type="checkbox" id="php" name="php" value="PHP">
	    PHP
	    <input type="checkbox" id="c++" name="c++" value="C++">    
	    C++  <br>

	Email :
		<input type="text" name="email"> <br>

    Password :
		<input type="text" name="password"> <br>

    Please choose a file :
    <input type="file" name="filetoupload"><br>
    
	<input type="submit" name="submit" value="Sumbit">
	<input type="reset" name="reset" value="Reset">


	</form>

</body>
</html>