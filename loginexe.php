<?php
session_start();
//starting the session
include_once 'pdo.php';
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="login2.css">
</head>
<body>
	<header>
		<ul class="menu">
				<li><a href="labexe1.php">Register</a></li>
				
			</ul>
	</header>
	<form action="loginsess.php" method="post">
		<div class="login-box">
			<h1>LOGIN</h1>
			<p>
				<?php
				if (isset($_SESSION["grau"])) {

					//echo $_SESSION["grau"];
				}else{
					echo "";
				}

				?>
			</p>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Username" name="username" value="">
				
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