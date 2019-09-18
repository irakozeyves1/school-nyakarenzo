<?php
include "connection.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$mothername=$_POST['mothername'];
$fathername=$_POST['fathername'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$sector=$_POST['sector'];
$cellule=$_POST['cellule'];
$village=$_POST['village'];
$yearofstudy=$_POST['yearofstudy'];
$feespaid=$_POST['feespaid'];
$transdate=$_POST['transdate'];
$comment=$_POST['comment'];

$d="insert into student (fname,lname,dob,mothername,fathername,gender,district,sector,cellule,village,yearofstudy,feespaid,transdate,comment)VALUES('$fname','$lname','$dob','$mothername','$fathername','$gender','$district','$sector','$cellule','$village','$yearofstudy','$feespaid','$transdate','$comment')";
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
<a href="student.php">BACK</a>