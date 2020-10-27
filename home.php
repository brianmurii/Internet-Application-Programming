<?php
session_start();

include_once 'pdo.php';
include_once 'insert.php';

$con= new Dbh();
$pdo=$con->connect();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<div class="header">
		<h1 class="Title">Welcome</h1>
		<?php
		if (isset($_SESSION['email'])) {
			?>
			<a href='loginlab.php' id="Login">Login</a>
			<a href='changepassword.php' id="Login">Change Password</a>
			
			<?php
		}
		else{
			$stmt=$pdo->prepare("SELECT fname FROM user WHERE email=?");
			$stmt->execute([$_SESSION['email']]);
			$row1=$stmt->fetch();

			$stmt1=$pdo->prepare("SELECT lname FROM user WHERE email=?");
			$stmt1->execute([$_SESSION['email']]);
			$row2=$stmt1->fetch();

			$stmt2=$pdo->prepare("SELECT city FROM user WHERE email=?");
			$stmt2->execute([$_SESSION['email']]);
			$row3=$stmt2->fetch();

			$stmt3=$pdo->prepare("SELECT password FROM user WHERE email=?");
			$stmt3->execute([$_SESSION['email']]);
			$row4=$stmt3->fetch();

			$stmt4=$pdo->prepare("SELECT email FROM user WHERE email=?");
			$stmt4->execute([$_SESSION['email']]);
			$row5=$stmt4->fetch();

			echo "<p id='welcome'> WELCOME".$_SESSION['email']."</p>";
			echo "<br>";
			echo "<p id='details'> Here are your details; </p>";

			echo "<p id='mail'>Email: ".$_SESSION['email']."</p>";

			if ($row1 !== null) {
				echo "<p id='fname'>First Name: ".$row1['fname']."</p>";
			}
			if ($row2 !== null) {
				echo "<p id='lname'>Last Name: ".$row2['lname']."</p>";
			}
			if ($row3 !== null) {
				echo "<p id='city'>City of Residence: ".$row3['city']."</p>";
			}
			if ($row4 !== null) {
				echo "<p id='password'>Password: ".$row4['password']."</p>";
			}
			if ($row5 !== null) {
				echo "<p id='email'>Email: ".$row5['email']."</p>";
			}
		}

?>
		

	</div>

</body>
</html>