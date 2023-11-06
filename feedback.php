<?php

include "dbconfig.php";

$name = $_POST['name'];
$usn =  $_POST['usn'];
$eid = $_POST['eid'];
$phone = $_POST['phone'];
$rate = $_POST['rate'];
$sugg = $_POST['sugg'];

$sql="insert into feedback(name,usn,eid,phone,rate,sugg)  
		values('$name','$usn','$eid','$phone','$rate','$sugg')";

		if(mysqli_query($conn,$sql))
{
	//echo "<br>mysql query success<br>";
	echo "<br>Thank you for feedback<br>";
	header("Location: index.php");
	
}
else
{
	//echo "<br>mysql query failure<br>";
	echo "<br>Try again<br>";
}
?>