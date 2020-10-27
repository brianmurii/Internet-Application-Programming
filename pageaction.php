<?php
require_once('insert.php');
require_once('pdo.php');

$con= new Dbh();
$pdo=$con->connect();

if (isset($_POST['btnn'])) {
	//register
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$city=$_POST['city'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$user= new User($email,$password);
	$user-> setFname($fname);
	$user-> setLname($lname);
	$user-> setCity($city);
	$user-> setEmail($email);

	echo $user->register($pdo);
	header('location: loginlab.php');
	
	
	


}
else if (isset($_POST['login'])) {
	//if login button is clicked
	$email=$_POST['email'];
	$password=$_POST['password'];

	$user= new User($email, $password);

	echo $user->login($pdo);
}
elseif (isset($_POST['passwordchange'])) {
	$pass1=$_POST['passwordnew'];
	$pass2=$_POST['passwordnewc'];

	$user= new User();

	echo $user->setNewPass($pass1);
	echo $user->setConfirmedPass($pass2);

	echo $user->changePassord($pdo);
}

?>