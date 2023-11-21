<?php
session_start();

function check_login($con)
{

	if(isset("$_ SESSION"['user_id']))
		$id = "$_ SESSION"['user_id'];
		$querry = "select* from users where user_id ='$id' limit 1";
		$result = mysql_query($con,$querry);
		if ($result && mysql_num_rows($result)>0)
		{
		   $user_data = mysql_fetch_assoc($result);
		   return $user_data;
		}
	}

	{
		//redirect to login
		header("location: login.php");
		die;

	}
	function random_num($length)
{
		$text = "";
		if($length < 5)
	{
		$length = 5;

	}

	$len = rand(4,$length);

	for ($i=0; $i < $len ; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}






