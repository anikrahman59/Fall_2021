<!-- <?php
include('../Control/logincheck.php');

if(isset($_SESSION['username']))
{
	header("location: pageone");
}
?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h2>Personal Details </h2>

	    Username :
		<input type="text" name="username"> <br>
		Password :
		<input type="text" name="password"> <br>
		Full Name :
		<input type="text" name="fullname"> <br>
		Mobile No :
		<input type="text" name="mobile"> <br>
		Date of Birth :
		<input type="date" name="dob" id="dob"> <br>

		<input type="submit" name="submit" value="Next">	
	
</body>
</html>