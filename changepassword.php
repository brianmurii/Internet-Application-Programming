<?php
session_start();
include_once 'pdo.php';

$con= new Dbh();
$pdo=$con->connect();

if (isset($_SESSION['email'])) {
	try{
		$stmt= $pdo->prepare('SELECT password FROM user WHERE email=?');
		$stmt->execute([$_SESSION['email']]);

		$row=$stmt->fetch();
	}catch(PDOException $e){
		return $e->getMessage();

	}
	if ($row !== null) {
		echo "<p id='current'> Your current password is: <br><br> ".$row['password']."</p>";
		echo '<br><br>';
	}
	else{
		echo "Unable to obtain Credentials";
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Change Password</title>
		<link rel="stylesheet" type="text/css" href="changepassword.css">
	</head>
	<body>
		<header>
		<ul class="menu">
				<li><a href="home.php">Home</a></li>
				
			</ul>
	</header>
		<form method="Post" action="insert.php" class="changepassform">
			<div class="changep">
			<h1 id="header">Change Password</h1>
			<div class="textbox">
			<input type="password" name="passwordnew" id="passwordnew" placeholder="Enter New Password"><br><br>
			</div>

			<div class="textbox">

			<input type="password" name="passwordnewc" id="passwordnewc" placeholder="Confirm New Password"><br><br>
			</div>

			<input class="btn" type="Submit" name="passwordchange" value="Change" id="change">
			</div>
			
		</form>
	
	</body>
	</html>
	<?php
}
	?>







?>