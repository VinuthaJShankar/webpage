<?php
$server="localhost";
$user="root";
$password="";
$db="feedback";

$conn = mysqli_connect($server,$user,$password,$db);
if($conn)
{
	//echo"dbconfig connection successfull";
	echo"Feedback page successfull";
}
else
{
	//echo"dbconfig connection failure";
	echo"Feedback page unsuccessfull";
}