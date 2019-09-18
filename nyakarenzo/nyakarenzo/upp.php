<html>
<head>
<script>
function lettersOnly(input)
{
	var regex = /[^a-z ]/gi;
	input .value=input.value.replace (regex,"");

}
function numbersOnly(input)
{
	var regex = /[^0-9 .]/gi;
	input .value=input.value.replace (regex,"");

}
</script>
</head>
<body bgcolor="white">

<center>
<?php include("connection.php");?>
<?php
$studentid=$_REQUEST['studentid'];
$result=mysqli_query($link,"select * from student where studentid='$studentid' ")or die(mysql_error());
$rows=mysqli_fetch_array($result);
$f=$rows['fname'];
$l=$rows['lname'];
$a=$rows['dob'];
$m=$rows['mothername'];
$fa=$rows['fathername'];
$d=$rows['district'];
$s=$rows['sector'];
$v=$rows['village'];
$c=$rows['cellule'];
$y=$rows['yearofstudy'];
$fe=$rows['feespaid'];
$co=$rows['comment'];
$t=$rows['transdate'];
 if (isset($_POST['Submit']))
 {
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$mothername=$_REQUEST['mothername'];
$fathername=$_REQUEST['fathername'];
$gender=$_REQUEST['gender'];
$district=$_REQUEST['district'];
$sector=$_REQUEST['sector'];
$village=$_REQUEST['village'];
$cellule=$_REQUEST['cellule'];
$yearofstudy=$_REQUEST['yearofstudy'];
$feespaid=$_REQUEST['feespaid'];
$transdate=$_REQUEST['transdate'];
$comment=$_REQUEST['comment'];
mysqli_query($link,"UPDATE student SET fname='$fname',lname='$lname',dob='$dob',mothername='$mothername',fathername='$fathername',gender='$gender',district='$district',sector='$sector',village='$village',cellule='$cellule',yearofstudy='$yearofstudy',feespaid='$feespaid',comment='$comment',transdate='$transdate' where studentid='$studentid'; ")or die(mysql_error());
include("up.php");
}
else
{

?>

<br/>
<br/>
<br/>
<br/>
<p align="center"><font size="+3" color="#FFCC99"><strong>UPDATE STUDENT</strong></font></p>
<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">

<table bgcolor="#00FFFF"; border="2">
			<tr >
				<th><label FOR="input-one"><strong>FIST NAME:</strong></label></th>
				<td><input  NAME="fname" TYPE="text" SIZE="30" VALUE="<?php print$f?>" required onkeyup="lettersOnly(this)"></td>
			</tr>	
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>LAST NAME:</strong></label></th>
				<td><input  NAME="lname" TYPE="text" SIZE="30" VALUE="<?php print$l?>" required onkeyup="lettersOnly(this)"></td>
			</tr>	
			
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong> DATE OF BIRTH:</strong></label></th>
				<td><input  NAME="dob" TYPE="date" SIZE="30" VALUE="<?php print$a?>" required></td>
			</tr>	
			
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>MOTHERNAME:</strong></label></th>
				<td><input  NAME="mothername" TYPE="text" SIZE="30" VALUE="<?php print$m?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>FATHERNAME:</strong></label></th>
				<td><input  NAME="fathername" TYPE="text" SIZE="30" VALUE="<?php print$fa?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
				<tr BGCOLOR="#00FFFF">
			<td><label FOR="input-one"><strong><font color="#FFFFFF">GENDER:</font></strong></label></td><td><select name="gender">
   <option value="male">Male</option>
    <option value="female">Female</option>
	
  </select></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>DISTRICT:</strong></label></th>
				<td><input  NAME="district" TYPE="text" SIZE="30" VALUE="<?php print$d?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>SECTOR:</strong></label></th>
				<td><input  NAME="sector" TYPE="text" SIZE="30" VALUE="<?php print$s?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>CELLULE:</strong></label></th>
				<td><input  NAME="village" TYPE="text" SIZE="30" VALUE="<?php print$c?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>VILLAGE:</strong></label></th>
				<td><input  NAME="cellule" TYPE="text" SIZE="30" VALUE="<?php print$v?>" required onkeyup="lettersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
<td>YEAR OF STUDY</td>
<td>
<select name="yearofstudy" value="<?php print$y?>" >
<option></option>
<option>S1A</option>
<option>S1B</option>
<option>S1C</option>
<option>S2A</option>
<option>S2B</option>
<option>S3A</option>
<option>S3B</option>
<option>S4LFK</option>
<option>S5LFK</option>
<option>S6LFK</option>
<option>SHEG</option>
<option>S4HEG</option>
<option>S5HEG</option>
<option>S6HEG</option>
</select>
</td>
</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>FEES PAID:</strong></label></th>
				<td><input  NAME="feespaid" TYPE="text" SIZE="30" VALUE="<?php print$fe?>" required onkeyup="numbersOnly(this)"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>TRANS DATE:</strong></label></th>
				<td><input  NAME="transdate" TYPE="date" SIZE="30" VALUE="<?php print$t?>"></td>
			</tr>
			<tr BGCOLOR="#00FFFF">
				<th><label FOR="input-one"><strong>COMMENT:</strong></label></th>
				<td><textarea name="comment" rows="5" cols="20" required><?php print$co?></textarea></td>
			</tr>
			<tr BGCOLOR="#9900FF">
				<td  COLSPAN="2" ALIGN="center"><button TYPE="submit" NAME="Submit">Update</button></td>
			</tr> 	
			</table>
		
</form>
</body>
</html>
 <?php
 }
 ?>
 </center>
 
