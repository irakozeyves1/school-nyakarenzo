<?php
include "connection.php";
?>
<html>
<head>
<title>student transaction</title>
<style type="text/css" media="screen">
table 
{
	background-color:lightblue;
	color:black;
	font-family:sans-serif;
	font-size:12px;
}
a{text-decoration: none;}
body{
	
font-family:Arial, Helvetica, sans-serif;
font-style:normal;
font-weight:bold;
font-size:12px;
color: #FFFFFF;
text-decoration: none;
}
a{color:black;}

input[type=text]{
	width:200px;
	box-sizing:border-box;
	border:3px solid lightblue;
	border-radius:4px;
}
input[type=date]{
	width:200px;
	box-sizing:border-box;
	border:3px solid lightblue;
	border-radius:4px;
}
select{
	width:200px;
	box-sizing:border-box;
	border:2px solid lightblue;
	border-radius:4px;
}
textarea{
	width:200px;
	box-sizing:border-box;
	border:2px solid lightblue;
	border-radius:4px;
}
button{
	width:70px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
input[type=submit]{
	width:80px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
#main{
	width:200px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
h1{
	font-size:20px;
	
}
</style>
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
<body style="background-color:#ffffff;">

<form method ="post" action="register.php">
<table border="0" align="center">
<tr>
<th colspan="2"><h1 style="color :teal;"><b><strong>STUDENT INFORMATION </strong></b></h1></th>
</tr>
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname" placeholder="Enter First Name " required  onkeyup="lettersOnly(this)" ></td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" placeholder="Enter Last Name " required  onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
<td><input type="date" name="dob" required></td>
</tr>
<tr>
<td>FATHER NAME</td>
<td><input type="text" name="fathername" placeholder="Enter Father Name " required onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>MOTHER NAME</td>
<td><input type="text" name="mothername" placeholder="Enter Mother Name " required onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>GENDER</td>
<td>
<input type="radio" name="gender" value="male" required>Male <br>
<input type="radio" name="gender" value="female" required>Female
</td>
</tr>
<tr>
<td>DISTRICT</td>
<td>
<select name="district" required>
<option>Select District</option>
<option>KARONGI</option>
<option>HUYE</option>
<option>NYAMASHEKE</option>
<option>RUSIZI</option>
<option>NYAMAGABE</option>
<option>NYANZA</option>
<option>RUTSIRO</option>
<option>NYARUGENGE</option>
<option>NGORORERO</option>
<option>NYABIHU</option>
<option>NYARUGURU</option>
<option>KAMONYI</option>
<option>MUHANGA</option>
<option>NYAGATARE</option>
<option>BUGESERA</option>
<option>RWAMAGANA</option>
<option>NGOMA</option>
<option>KIREHE</option>
<option>GICUMBI</option>
<option>BURERA</option>
<option>RUBAVU</option>
<option>MUSANZE</option>
<option>GISAGARA</option>
<option>KICUKIRO</option>
<option>kAYONZA</option>
<option>GISAGARA</option>
<option>kAYONZA</option>
<option>RUHANGO</option>
<option>GAKENKE</option>
<option>RULINDO</option>
<option>GASABO</option>
</select>
</td>
</tr>
<tr>
<td>SECTOR</td>
<td>
<select name="sector" required>
<option>Select Sector</option>
<option>GIHEKE</option>
<option>GIHUNDWE</option>
<option>NYAKARENZO</option>
<option>MURURU</option>
<option>GASHONGA</option>
<option>KAMEMBE</option>
<option>BUGARAMA</option>
<option>NKANKA</option>
<option>NKOMBO</option>
<option>MUGANZA</option>
<option>GIKUNDAMVURA</option>
<option>NZAHAHA</option>
<option>RWIMBOGO</option>
<option>GITAMBI</option>
<option>BUTARE</option>
<option>NYAMIRAMBO</option>
</select>
</td>
</tr>
<tr>
<td>CELLULE</td>
<td><input type="text" name="cellule" placeholder="Enter Cellule Name " required onkeyup="lettersOnly(this)"></td>
</tr>
<tr>  
<td>VILLAGE</td>
<td><input type="text" name="village" placeholder="Enter Village Name " required onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>YEAR OF STUDY</td>
<td>
<select name="yearofstudy" required>
<option>Select Class</option>
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
<tr>
<td>FEES PAID</td>
<td><input type="text" name="feespaid" placeholder="Enter Fees PAID" required onkeyup="numbersOnly(this)"></td>
</tr>
<tr>
<td>TRANSACTION DATE</td>
<td><input type="date" name="transdate" required></td>
</tr>
<tr>
<td>COMMENTS</td>
<td><textarea name="comment"   rows="5" cols="20" required></textarea></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="SAVE" name="submit"/>
<button><a href="delete.php">DELETE</a></button>
<button><a href="up.php">UPDATE</a></button>
<button><a href="search.php">SEARCH</a></button>
<button><a href="print.php">PRINT</a></button>
</td>
</tr>
</table>
</form>
<center><button id="main"><a href="student.php">Refflesh</button></center>
<center><button id="main"><a href="accountcreation.php">Create Account</button></center>
<center><button id="main"><a href="index.php">Logout</button></center>
</body>
</html>