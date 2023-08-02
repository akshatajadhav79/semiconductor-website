<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>validation</title>
    <link rel="stylesheet" href="style.css">
		<style type="text/css">
	
		body{
			background: url("th (1).jpg") no-repeat;
			background-size: 100% 100% ;
			font-family: cooper black;
			font-size: 20px;

		}
		#in{
			background-color: white;
			width: 40%;
			margin: 120px auto;
			padding: 100px;
			box-shadow: 10px 10px 5px rgb(82, 11, 77);
			border-radius: 6px;

		}
		#but{
			color: black;
			background-color: lightskyblue;
			padding: 20px ;
			font-size: large;
			border-radius: 10px;
			font-family: Cooper Black;
		}
        .size{
            height: 25px;
            width: 200px;
           background-color:papayawhip;
        }
      

	</style>
 
</head>
<body>  
    <script type="text/javascript">
       
        
         function myFun()
         {  
             var name = document.getElementById('name').value;
              var cor_way = /^[A-Za-z]+$/;  
            if(name.length < 2 || name.length > 20 )
            {
               alert("Name length should be more than 2 and less then 21");
                return false;
            }
            if (name.match(cor_way)) {true;}
            else{alert("Only alphabets are allowed");}


         var password = document.forms.password;
              if(!password.value.match(/^.{5,15}$/))
            {
                alert("Password length must be between 5-15 character!");
                return false;
            }
              

              var a = document.forms.gender;
            for (var i = 0; i<a.length; i++) {
                if (a[i].checked == true)
                    return true;
            }
            alert("Please select gender");
            return false;

            return true;
         }
    </script>    
		<h1>CONTACTS</h1>
	<div id="nav">
				 	<li><a href="home1.html">HOME</a></li>
					<li><a href="home.html">Introduction</a></li>
					<li><a href="history.html">History</a></li>
					<li><a href="work.html">Working</a></li>
					<li><a href="industry.html">Industry</a></li>
					<li><a href="type.html">Types</a></li>
					<li><a href="future.html">Future</a></li>
					<li><a class="active"href="con.php">Contact</a></li>
				</ul>
			</div>
            <div id="in">
					<form onsubmit="return myFun()" name="forms" action="process.php" method="post">
					 <h1>Register Now</h1><br/>	
					<table >
						<tr>
							<td><label for="name">Name : </label></td><td><input type="text" class="size"name="uname"id="name" placeholder="Enter user name"required/></td>
						</tr>
						<tr>
							<td><label for="password">Password :</label></td><td><input type="password" name="password" class="size"placeholder="Enter password"required></td>
						</tr>
						<tr>
                        <td><label for="gender">Gender :</label></td>			
         <td>
   Male:<input type="radio" name="gender"value="Male"/>
   Female:<input type="radio" name="gender"value="Female">
   Other:<input type="radio" name="gender"value="Other">          
         </td>
			</tr>
				<tr><td><label for="education"> Education :</label></td>
                    <td>
             <select class="size"required>
                <option value="">select Education</option>
                <option value="10th"name="education[]">10th</option>
                <option value="12th" name="education[]">12th</option>
                <option value="BSC" name="education[]">BSC</option>
                <option value="B.COM" name="education[]">B.COM</option>
                <option value="BCA" name="education[]">BCA</option>
                <option value="B.TECH" name="education[]">B.THCH</option>
                <option value="B.E" name="education[]">B.E</option>
                <option value="B.A" name="education[]">B.A</option>
                </select> </td>
				<tr>
                 <td><label for="message">COMMENT:</label></td>
				<td><textarea rows="2" name="comment"  class="size" id="web" required></textarea></td>
				</tr>
			
						<tr >
	<td align="right"><input type="submit" value="Register" id="but"/></td>
 	<td><input type="button"id="but"value="BACK" onclick="window.location.href ='home.html';" />
        <input type="reset" value="reset"name="reset" id="but"/></td>
						</tr>
							
				 </table>
	</form></div>
</body>
</html>