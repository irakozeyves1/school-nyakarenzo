<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
table,tr,th,td
{
	border: 2px solid lightblue;
}

button
{
	width:80px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
a{text-decoration: none;}
</style>
</head>
<?php include('connection.php'); ?>
<center>
<a href="student.php"><b>Home</b></a>
				</center>
<center>
<table cellpadding="2" cellspacing="2" border="2" bordercolor="#000000" class="table table-striped table-bordered" >


 <thead >
 <tr>
<th colspan="16">UPDATE REPORT</th>
</tr>
 <tr> 
<th>StudentId</th>						 
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
<th>Comment</th>
<th>Trans Date</th>
<th>Action</th> 
</tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($link,"SELECT * FROM student") or die(mysql_error());
						
                        while ($row = mysqli_fetch_array($query)) {
                            $studentid = $row['studentid'];
                // echo out the contents of each row into a table
			    ?>
				
				<?php
				echo '<td>' . $row['studentid'] . '</td>'; ?>
				 <?php 
				 echo '<td>' . $row['fname'] . '</td>';?>
				<?php
				echo '<td>' . $row['lname'] . '</td>';?>
				<?php
				echo '<td>' . $row['dob'] . '</td>';?>
				<?php
				echo '<td>' . $row['mothername'] . '</td>';?>
				<?php
				echo '<td>' . $row['fathername'] . '</td>';?>
				<?php
				echo '<td>' . $row['gender'] . '</td>';?>
				<?php
				echo '<td>' . $row['district'] . '</td>';?>
				<?php
				echo '<td>' . $row['sector'] . '</td>';?>
				<?php
				echo '<td>' . $row['village'] . '</td>';?>
				<?php
				echo '<td>' . $row['cellule'] . '</td>';?>
				<?php
				echo '<td>' . $row['yearofstudy'] . '</td>';?>
				<?php
				echo '<td>' . $row['feespaid'] . '</td>';?>
				<?php
				echo '<td>' . $row['comment'] . '</td>';?>
				<?php
				echo '<td>' . $row['transdate'] . '</td>';?>
				
<?php
	echo"<td ><a href ='upp.php?studentid=$studentid'>";?><button type="button" name="Submit" onClick="return confirm('Do you to update this record!!')">UPDATE</button><?php print"</a></td>";
echo "</tr>"; } ?>
    
                    </tbody>
					
                </table>
				</center>
<body>
</body>
</html>
