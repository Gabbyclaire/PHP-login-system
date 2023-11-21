<?php


 ?>

 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	
 	<title>Login</title>
 </head>
 <body>
 	<style type="text/css">
 		#text{
 			height: 25px;
 			border-radius: 5px;
 			padding: 5px;
 			border: solid thin #aaa;
 			
 		}

 		#button{
 			padding: 10px;
 			width: 100px;
 			color: white;
 			background-color: tan;
 			border: none;
 		}
 		#box{
 			background-color: black;
 			margin: auto;
 			width: 400px;
 			padding: 30px;
 		}
 	</style>

 	<div id="box">

 		<form method="post">
 			<div style="font size: 20px; margin: 10px; color: white;">Login</div>
 			
 			<input id="text" type="text" name="User_name"placeholder="username"><br><br>
 			<input id="text" type="password" name="password"placeholder= "password"><br><br>
 			<input id="button" type="submit" value="Login"><br><br>

 			<a href="signup.php">Click to Signup</a><br><br>

 		</form>
 	</div>
 
 </body>
 </html>