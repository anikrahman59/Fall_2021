<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h3>Search Faculty</h3>

    <form>
    	Search by Faculty Name :
    	<input type="text" name="name" id="name"> <br>

    	Search by Research Interest :
    	<input type="text" name="research" id="name"> <br>

    	Search by Designation :
    	<select name="designation" id="designation">

            <option value="lecturer">Lecturer</option>
            <option value="asst_prof">Assistant Professor</option>
            <option value="prof">Professor</option>
           
       </select> <br> <br>

       <input type="submit" name="submit" value="Submit">
    </form> <br>

    <button id="search" onclick=" AjaxFunction()"> Search </button>
    <br>

    <h3 id="message"></h4>
    <script src="../Js/myjs.js">

    </script>
	
</body>
</html>