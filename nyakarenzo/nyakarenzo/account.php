<?php
require "connection.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
 
$d="insert into login (fname,lname,email,username,password)VALUES('$fname','$lname','$email','$username','$password')";
$sql=mysqli_query($link,$d);
if ($sql)	
{
	echo "record inserted<br>";
}
else 
{
	echo "record not inserted<br>";
}

?>

<a href="accountcreation.php">BACK</a>