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
	<link rel="stylesheet" href="labexe1.css">
</head>
<body>
	<form action="pageaction.php"method="post">  
	<header>
		<ul class="menu">
				<li><a href="#">Login</a></li>
				
			</ul>
	</header>
	<div class="login-box">
		<h1>Sign-up</h1>
		<input type="hidden" name="id" value="">
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="First Name" name="fname" value="">
			
		</div>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Last Name"name="lname" value="">
			
		</div>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="City Of Residence" name="city" value="">
			
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
		<?php
		if (isset($_GET['insert']) && $_GET['insert']==1) {
			echo"Inserted Succesfully";
					}else{
						echo "Something went wrong";
					}

		?>
		


		

</body>
</html>