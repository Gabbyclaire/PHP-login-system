<?php
session_start();

	
	include("function.php");
$db_server = "localhost";
$db_user = "root";
$db_name = "db users";
$db_pass = "";

	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		//something was posted
		$user_name = "$_ POST"['user_name'];
		$password = "$_ POST"['password'];

		if(!empty($user_name) && !empty($password)&&is_numeric ($password))
		{
			//save to database
			$querry = "insert users (user_id, user_name, password) values ('$user_id','user_name','password')"

			mysqli_querry($con, $querry);

			header("location: login.php");
			die;


		}else
		{
			echo "please enter some valid information!";
		}
	}

 ?>

 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	
 	<title>Sign up</title>
 </head>
 <body><center>
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
 			<div style="font size: 20px; margin: 10px; color: white;">Signup</div>
 			
 			<input id="text" type="text" name="User_name" placeholder="user_name"><br><br>
 			<input id="text" type="password" name="password"placeholder= "password"><br><br>
 			<input id="text" type="email" name="email" placeholder="email adress"><br><br>
 			<input id="button" type="submit" value="Signup"><br><br>

 			<a href="login.php">Click to Login</a><br><br>

 		</form>
 	</div>
 
 </body></center>
 </html>