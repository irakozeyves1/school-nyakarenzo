<style>
table,tr,th,td
{
border: 2px solid lightblue;
	
}
a{text-decoration: none;}
</style>


<a href="student.php"><b>Home</b></a>
<?php
include "connection.php";
$result=mysqli_query($link,"select * from student");

?>
<table border="1">
<tr>
<th colspan="15">DELETE REPORT</th>
</tr>
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
<th>Action</th> 
</tr>
<?php
$i=1;
while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$fname =$row['fname'];
$lname =$row['lname'];
$dob =$row['dob'];
$mothername =$row['mothername'];
$fathername =$row['fathername'];
$gender =$row['gender'];
$district =$row['district'];
$sector =$row['sector'];
$cellule =$row['cellule'];
$village =$row['village'];
$yearofstudy =$row['yearofstudy'];
$feespaid =$row['feespaid'];
$transdate =$row['transdate'];
$comment =$row['comment'];
$studentid=$row ['studentid'];

?>
<tr>
<td><?php echo $fname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $dob ?></td>
<td><?php echo $mothername; ?></td>
<td><?php echo $fathername; ?></td>
<td><?php echo $gender ?></td>
<td><?php echo $district ?></td>
<td><?php echo $sector ?></td>
<td><?php echo $cellule?></td>
<td><?php echo $village ?></td>
<td><?php echo $yearofstudy ?></td>
<td><?php echo $feespaid ?></td>
<td><?php echo $transdate ?></td>
<td><?php echo $comment ?></td>
<td>
<a href="delete.php?delete=<?php echo $studentid; ?>" onclick="return confirm('Are You Sure you want to delete?');">DELETE</a>
</td>
</tr>
<?php
$i++;
}
if (isset($_GET['delete']))
{
	$delete_id =$_GET['delete']; 
	mysqli_query ($link,"DELETE from student WHERE studentid ='$delete_id' ");
    header("location:delete.php");    
}
?>
</table>