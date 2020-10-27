<?php
session_start();
//starting the session
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="loginlab.css">
</head>
<body>
	<header>
		<ul class="menu">
				<li><a href="labexe1.php">Register</a></li>
				
			</ul>
	</header>
	<form action="pageaction.php" method="post">
		<div class="login-box">
			<h1>LOGIN</h1>
			<p>
				
			</p>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Email" name="email" value="">
				
			</div>
			<div class="textbox">
				<i class="fas fa-user-lock"></i>
				<input type="password" placeholder="Password" name="password" value="">
				
			</div>
			<input class="btn" type="submit" name="login" value="Sign In">
			<div class="register">
				<p>Don't have an account?</p>
				<li><a href="labexe1.php">Register here</a></li>
					
				
			</div>
			
		</div>

	</form>
	<?php