<?php

$valMsg="";
$valMsg2="";
$valMsg3="";
$valMsg4="";
$ageVal="";
$checkboxVal="";
$java=$php=$c="";
$radioVal="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fnameVal=$_POST["fname"];
	if((empty($_REQUEST["fname"])) || (strlen($_REQUEST["fname"])<5) || preg_match("[a-z]",$fnameVal))
	{
		$valMsg="Enter Your FirstName correctly ";
	}
	else
	{
		$valMsg="Your First name is " .$fnameVal;
	}

	$lnameVal=$_POST["lname"];
	if((empty($_REQUEST["lname"])) || (strlen($_REQUEST["lname"])<5) || preg_match("[a-z]",$lnameVal))
	{
		$valMsg2="Enter Your LastName correctly";
	}
	else
	{
		$valMsg2="Your Last name is " .$lnameVal;
	}

	$emailVal=$_POST["email"];
	if((empty($_REQUEST["email"]))  || !preg_match("[@]",$emailVal))
	{
		$valMsg3="Enter Your email correctly";
	}
	else
	{
		$valMsg3="Your Email is " .$emailVal;
	}

	$passVal=$_POST["password"];
	if((empty($_REQUEST["password"]))  || (strlen($_REQUEST["password"])<8))
	{
		$valMsg4="Your password must contain 8 charecter !";
	}
	else
	{
		$valMsg4="Your Password is " .$passVal;
	}

	$ageVal=$_REQUEST["age"];
	if(empty($_REQUEST["age"]) || !is_numeric($_REQUEST["age"]))
    {
        $ageVal= "Please enter your age";

    }
    else
    {
        $ageVal="Your age: " .$ageVal;
    }

}


        if(isset($_REQUEST["java"]))
          {
             $java= $_REQUEST["java"];
          }
        if(isset($_REQUEST["php"]))
          { 
             $php= $_REQUEST["php"];
          }
        if(isset($_REQUEST["c++"]))
          {
             $c= $_REQUEST["c++"];
          }

        if(isset($_REQUEST["Designation"]))
          {
             $radioVal= $_REQUEST["Designation"];
          } 

?>