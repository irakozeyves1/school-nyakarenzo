<?php
if (isset($_POST['search']))
{
$ValueToSearch=$_POST['ValueToSearch'];
$query="SELECT * FROM student WHERE CONCAT(`studentid`, `fname`, `lname`, `dob`, `mothername`, `fathername`, `gender`, `district`, `sector`, `village`, `cellule`, `yearofstudy`, `feespaid`, `comment`, `transdate`) LIKE '%".$ValueToSearch."%'";	
$search_result=FilterTable($query);
 
}
else
{
$query="select * from student";
$search_result=FilterTable($query);
}
function FilterTable($query)
{
/*$a="localhost";
$b="root";
$c="";
$db="nyakarenzo";
$connect=mysqli_connect($a,$b,$c);
$g=mysqli_select_db($link,$db);
$filter_Result=mysql_query($g,$query);
return $filter_Result;*/
include "connection.php";
$filter_Result=mysqli_query($link,$query);;
return $filter_Result;
}
?>
<html>
<head>
<title>Data Search</title>
<style>
table,tr,th,td
{
	border: 2px solid navy;
}
a{text-decoration: none;}
.par{
	text_align:right;
}
input[type=submit]{
	width:80px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
input[type=text]{
	width:200px;
	box-sizing:border-box;
	border:3px solid lightblue;
	border-radius:4px;
}
</style>
</head>
<body>
<a href="student.php">Home</a></center><br><a href="search.php">Refflesh</a>
<center><p><u><I>REPORT FOR SEARCH</I></u></p>

<form  method="post">
<input type="text" name="ValueToSearch" placeholder="Value To Search">
<input type="submit" name="search" value="Filter"><br><br>
<table>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Date of birth</th>
<th>MotherName</th>
<th>FatherName</th>
<th>Gender</th>
<th>District</th>
<th>Sector</th>
<th>Cellule</th>
<th>Village</th>
<th>Class</th>
<th>FeesPaid</th>
<th>Trans Date</th>
<th>Comment</th>
</tr>
<?php while($row =mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['mothername'];?></td>
<td><?php echo $row['fathername'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['sector'];?></td>
<td><?php echo $row['cellule'];?></td>
<td><?php echo $row['village'];?></td>
<td><?php echo $row['yearofstudy'];?></td>
<td><?php echo $row['feespaid'];?></td>
<td><?php echo $row['transdate'];?></td>
<td><?php echo $row['comment'];?></td>
</tr>
<?php endwhile;?>
</table>
</form>
</body>
</html>