<?php
include'database.php';
if(isset($_POST['submit']))
{
	$name=$_POST['uname'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$education=$_POST['education'];
	
	$chk="";
	foreach ($education as $chk1 ) {
		$chk.=$chk1.",";
	}
	
	$sql="insert into student(name,password,gender,education)values('$name','$password','$gender','$chk')";
	if(mysqli_query($con,$sql))
	{
		echo"<script>alert('New record inserted')</script>";
		echo"<script>window.open('login.php','_self')</script>";
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	mysqli_close($con);
}
?>