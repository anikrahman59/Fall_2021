<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link rel="stylesheet" href="Css/css.css">
	<form action="" method="post" enctype="multipart/form-data">
</head>
<body>

	<div id=header>
		<br>
		<h2 id=abc >ABC Management System </h2>
		<h3 id=future>We Create Future </h3>
	</div>

   <div class="bar">
      Home  AboutUS  Shop
   </div>

	<h3 id=registration>Registration Form</h3><hr>

	<form action="" method="POST">

<div class="body">

		<p class="input">
	First Name :
		<input type="text" name="fname"> <br>
		</p>


        <p class="input">
	Last Name :
		<input type="text" name="lname">  <br>
	    </p>
        
        <p class="input">
	Age :
		<input type="text" name="age"> <br>
	    </p>

	    <p class="input">
	Designation :
	    <input type="radio" id="jp" name="Designation" value="Junior Programmer">
	          <label for="jp">Junior Programmer</label>
	    <input type="radio" id="sp" name="Designation" value="Senior Programmer">
	          <label for="sp">Senior Programmer</label>
	    <input type="radio" id="pl" name="Designation" value="Project Leader">
	          <label for="pl">Project Lead</label>
	          <br>
	    </p>      
        
        <p class="input">
	Preferred Language:
	    <input type="checkbox" id="java" name="java" value="JAVA">
	    JAVA
	    <input type="checkbox" id="php" name="php" value="PHP">
	    PHP
	    <input type="checkbox" id="c++" name="c++" value="C++">    
	    C++  <br>
	    </p>


        <p class="input">
	Email :
		<input type="text" name="email"> <br>
		</p>
        
        <p class="input">
    Password :
		<input type="text" name="password"> <br>
		</p>


        <p class="input">
    Please choose a file :
    <input type="file" name="filetoupload"><br>
        </p>
    
	<input type="submit" name="submit" value="Submit" id="submit">
	<input type="reset" name="reset" value="Reset" id="reset">


</div>

	</form>

	
</body>
</html>