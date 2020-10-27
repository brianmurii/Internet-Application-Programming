<?php
session_start();
$edit_state=1;
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="registerr.css">
</head>
<body>
	<form action="server.php"method="post">  
	<header>
		<ul class="menu">
				
				
			</ul>
	</header>
	<div class="login-box">
		<h1>Sign-up</h1>
		<input type="hidden" name="id" value="">
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Username" name="username" value="">
			
		</div>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="City" name="residence" value="">
			
		</div>
		<div class="textbox">
			<i class="fas fa-user-lock"></i>
			<input type="password" placeholder="Password" name="password" value="">
		</div>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="email" placeholder="Email" name="email" value="">
			
		</div>
			<input class="btn" type="submit" name="btnn" value="Register">
		
		


		

</body>
</html>