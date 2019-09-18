<a href="accountcreation.php">BACK</a>
<?php
include "connection.php";
$result=mysqli_query($link,"select * from login");

?>
<table border="1" align="center">
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Username</th>
<th>Password</th>
<th>Action</th> 
</tr>
<?php
$i=1;
while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$username=$row['username'];
$password=$row['password'];
$loginid=$row ['loginid'];
?>
<tr>
<td><?php echo $fname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $email ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $password; ?></td>
<td>
<a href="delete.php?delete=<?php echo $loginid; ?>" onclick="return confirm('Are You Sure you want to delete?');">DELETE</a>
</td>
</tr>
<?php
$i++;
}
if (isset($_GET['delete']))
{
	$delete_id =$_GET['delete']; 
	mysqli_query ($link,"DELETE from student WHERE loginid ='$delete_id' ");
    header("location:deleteaccount.php");    
}
?>
</table>