<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact</title>
	<link rel="stylesheet" href="style.css">

	<style type="text/css">
		#in{
			background: url("th (1).jpg") no-repeat;
			background-size: 100% 110% ;
			font-family: cooper black;
			font-size: 20px;
			padding-left: 20%;
			padding-bottom: 10%;
		}
		#out{
			font-family: Cooper Black;
			font-size: 20px;
			background-size: 30px;
		}
		#in table td{
			color: whitesmoke;
			font-family: Cooper Black;
		}
		#in table input {
			background: whitesmoke ;
			color: black;
			font-family: Cooper Black;
			font-size: 20px;
		}

	</style>
</head>
<body>
	<h1>CONTACTS</h1>
	<div id="nav">
				 	<li><a href="home1.html">HOME</a></li>
					<li><a href="home.html">Introduction</a></li>
					<li><a href="history.html">History</a></li>
					<li><a href="work.html">Working</a></li>
					<li><a href="industry.html">Industry</a></li>
					<li><a href="type.html">Types</a></li>
					<li><a href="future.html">Future</a></li>
					<li><a class="active"href="contact.php">Contact</a></li>
				</ul>
			</div>
			<h1>Register Now</h1>
			<div id="in">
				
					<form id="form" method="post"action="process.php">
					<table >
						<tr>
							<td>Name:</td><td><input type="text"name="uname"placeholder="Enter user name"required/></td>
						</tr>
						<tr>
							<td>Password:</td><td><input type="password"name="password"placeholder="Enter password"required/></td>
						</tr>
						<tr><td>Gender:</td></tr>
						<tr>
							<td>Male</td><td><input type="radio"value="male"name="gender"/></td>
						</tr>
						<tr>
							<td>Female</td><td><input type="radio"value="female"name="gender"/></td>
						</tr>
						<tr><td>Education:</td></tr>
						<tr>
							<td><input type="checkbox"value="10th"name="education[]"/></td>
							<td>10th</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="12th"name="education[]"/></td>
							<td>12th</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="BSC"name="education[]"/></td>
							<td>BSC</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="BCA"name="education[]"/></td>
							<td>BCA</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="BCOM"name="education[]"/></td>
							<td>BCOM</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="B.E"name="education[]"/></td>
							<td>B.E</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="B.Tech"name="education[]"/></td>
							<td>B.Tech</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="B.A"name="education[]"/></td>
							<td>B.A</td>
						</tr>
						<tr>
							<td><input type="checkbox"value="BCS"name="education[]"/></td>
							<td>BCS</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr><br/><br/>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td><br>
						</tr><br/><br/>
					</div>
						<tr id="out">
							<td align="right"><input type="submit"value="submit"name="submit" /><td>
							<td ></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr><br>
				 </table> </form>
			
			
</body>
</html>