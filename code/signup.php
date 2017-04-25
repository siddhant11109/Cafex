<?php
	require("connection.php");

	function newUser()
	{	
		echo "hey";
		$email = $_POST['email'];
		$userName = $_POST['username'];
		$password =  $_POST['password'];
		echo $email;
		//$query = "INSERT INTO `users`(`user_id`, `email`, `password`, `username`) VALUES ('1','hey.com', '1234', 'yesha')";
		$query = "INSERT INTO `users` (`user_id`, `email`, `password`, `username`) VALUES ('2','$email','$password','$userName')";
		$data = mysql_query ($query)or die(mysql_error());
		if($data)
		{
			echo "YOUR REGISTRATION IS COMPLETED...";
		}
	}
	

	function signUp()
	{
		if(isset($_POST['submit']))
		{	
			newUser();
		}
	}

?>


