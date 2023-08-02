<?php
$servername="localhost";
$username="root";
$password="";
$database="start";
$con=mysqli_connect($servername,$username,$password,$database);
//$con=mysql_connect("localhost","root","","start");
if(!$con)
{
	die("error detected".mysqli_error($con));
}
else
{
	echo"Connection essstabilished successfully";
}

?>