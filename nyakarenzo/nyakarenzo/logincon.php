<?php
session_start();
include "connection.php";
if (isset($_POST['submit']))
{ 
$username=$_POST['username'];
$password=$_POST['password'];
$mysql="select * from login where username='$username'  and  password='$password'";
$exe_query=mysqli_query ($link,$mysql);
$found_num_row=mysqli_num_rows($exe_query);
if ($found_num_row == 1)
{
	$_SESSION['submit']=$username;
	header("location:student.php");
}
else 
{
	echo "LOGIN FAILED YOUR NOT ALLOWED TO ENTER PLEASE ASK FOR HELP";
}
}
?>
