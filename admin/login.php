<?php
//this is the file used for logins by admin
//code below
include_once 'dbconnect.php';
if(isset($_POST['btn-login']))
{
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());
	$idd = $_POST['idd'];
	$upass = $_POST['pass'];
	$q="SELECT uname, pswd FROM admin WHERE uname='$idd'";
	$res=mysqli_query($conn,$q);
	$row=mysqli_fetch_array($res);
	
	$count = mysqli_affected_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['pswd']==($upass))
	{
	    header("Location:admin.php"); 
	}
	else
	{
		
        echo "dcmdcm";
       
	}
	
}
?>

<!DOCTYPE html>
<head>
<title>Admin Login</title>
<!--add link here of css <link rel="stylesheet" href="../style.css" type="text/css" /> -->
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center"  border="0">
<tr>
	<td><h1>Login</h1></td>
</tr>
<tr>
<td><input type="text" name="idd" placeholder="Unique id" title="Unique id" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password" title="Your password here please" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Login</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>