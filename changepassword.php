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
		<form method="Post" action="insert.php" class="changepassform">
			<h2 id="header">Change Password</h2>
			<input type="password" name="passwordnew" id="passwordnew" placeholder="Enter New Password"><br><br>

			<input type="password" name="passwordnewc" id="passwordnewc" placeholder="Confirm New Password"><br><br>

			<input type="Submit" name="passwordchange" value="Change" id="change">
			
		</form>
	
	</body>
	</html>
	<?php
}
	?>







?>