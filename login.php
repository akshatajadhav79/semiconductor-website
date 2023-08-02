<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hi</title>

	<style type="text/css">
		#log{
			background: url("th.jpg") no-repeat;
			background-size: 100% 110% ;
			font-family: cooper black;
			font-size: 20px;
			padding-left: 20%;
			padding-bottom: 10%;
		}
		#on{
			font-family: Cooper Black;
			font-size: 20px;
			background-size: 30px;
			color: yellow ;`
		}
		#log table td{
			color: whitesmoke;
			font-family: Cooper Black;
		}
		#log table input {
			background: whitesmoke ;
			color: black;
			font-family: Cooper Black;
			font-size: 20px;
		}

	</style>
</head>
<body>
 
 	<h1>Login</h1>
 	
 	<form method="post" id="log">
 		<br/><br/><br/><br/>
 		<br/><br/><br/><br/>
 		<br/><br/>
 		<tr>
 			<td>User Name:</td><br/>
 			<td><input type="text" name="uname"placeholder="Enter user name"/></td>
 		</tr><br/><br/>

 		<br/>
 		<tr>
 			<td>Password:</td><br/><td><input type="password"name="password"placeholder="Enter password"/></td>
 		</tr>
 		<br/><br/><br>
 		
 		<tr id="on">
 			<td align="right"><input type="submit"value="login"name="submit"/></td>
 			<td></td>
 		</tr>
 	</form>
 
</body></html>

<?php
include'database.php';
if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$sql="select*from student where name='$uname'and password='$password'";
	$que=mysqli_query($con,$sql);
	if(mysqli_num_rows($que)>0)
	{
		echo "<script>alert('login successful')</script>";
		echo "<script>window.open('contact.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Wrong user name and password')</script>";
		echo"<script>window.open('_self')</script>";
	}
}
?>