<html>
<head>
<title>Account Creation</title>
<style>
h3
{
	color:navy;
}
table 
{
  color:teal;	
}
a{text-decoration:none;}
a:hover{background-color:blue;}
	a{color:black;}
	
input[type=submit]{
	width:80px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
button{
	width:150px;
	box-sizing:border-box;
	border:2px solid blue;
	border-radius:4px;
}
</style>
<script>
function lettersOnly(input)
{
	var regex = /[^a-z ]/gi;
	input .value=input.value.replace (regex,"");

}

</script>
</head>
<body>
<center><p><marquee>Create Account Please Remember Username And Password</marquee></p><center>
<form method="post" action="account.php">
<table align="center" border="0" style="background-color:lightblue;">
<tr>
<th colspan="2"><h3><i>ACCOUNT CREATION FORM</i></h3></tr>
</tr>
<tr>
<td>FIRSTNAME</td>
<td><input type="text" name="fname" placeholder="Enter First Name" required  onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>LASTNAME</td>
<td><input type="text" name="lname" placeholder="Enter Last Name" required onkeyup="lettersOnly(this)"></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="text" name="email" placeholder="Enter First Name" required></td>
</tr>
<tr>
<td>USERNAME</td>
<td><input type="text" name="username" placeholder="Enter User Name" required></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" placeholder="Password Required" required></td>
</tr>
<tr>
<td><input type="submit" value="Create" name="submit"/></td>
<td><button><a href="deleteaccount.php">DELETE ACCOUNT</button></td>
</tr>
</table>
</form>
<button><a href="accountcreation.php">REFFLESH </a></button>
<p><a href="student.php">HOME</a></p>
</body>
</html>