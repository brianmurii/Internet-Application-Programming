<?php
class User{
	protected $fname;
	protected $lname;
	protected $city;
	protected $password;
	protected $email;
	protected $newpass;
	protected $confirmedpass;

	//class constructor;
	function __construct($user, $pass){
		$this->fname= "Unknown";
		$this->lname="Unknown";
		$this->email=$user;
		$this->city="Unknown";
		$this->password=$pass;
	}
	//newpass setter and getter
	public function setNewPass($new){
		$this->newpass=$new;
	}
	public function getNewPass(){

		return $this->newpass;

	}
	//confirmedpass setter and getter
	public function setConfirmedPass($confirmed){
		$this->confirmedpass=$confirmed;
	}
	public function getConfirmedPass(){

		return $this->confirmedpass;

	}

	//fname and lname setters and getters
	public function setFname($fname){
		$this->fname=$fname;
	}
	public function getFname(){

		return $this->fname;

	}
	public function setLname($lname){
		$this->lname=$lname;
	}
	public function getLname(){

		return $this->lname;
		
	}
	//email setter and getter
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){

		return $this->email;
		
	}
	//city setter and getter
	public function setCity($city){
		$this->city=$city;
	}
	public function getCity(){

		return $this->city;
		
	}
	//password setter and getter
	public function setPassword($password){
		$this->password=$password;
	}
	public function getPassword(){

		return $this->password;
		
	}


	//register
	public function register($pdo){
		$passwordhash= password_hash($this->password, PASSWORD_DEFAULT);
		try{
			$stmt=$pdo->prepare("INSERT INTO user(fname, lname, city, password, email) VALUES (?,?,?,?,?)");
			$stmt->execute([$this->getFname(),$this->getLname(),$this->getCity(),$this->getPassword(),$this->getEmail()]);
			return "Registration Successful";


		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function login($pdo){
		try{
			$stmt=$pdo->prepare('SELECT email, password FROM user WHERE email=?');
			$stmt->execute([$this->email]);

			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			if ($row==null) {
				echo var_dump($this->email);
				return 'No Account Found';
			}
			else{
				if ($this->password == $row['password']) {
					session_start();
					$_SESSION['email']=$row['email'];

					echo 'Succesful login'.$_SESSION['email'];
					echo '<br><br>';

					echo 'Welcome';
					header("Location: home.php");
				}else{
					return "Your username or password is incorrect, please try again";
				}
			}
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function changePassword ($pdo){
		session_start();
		if ($this->getNewPass()==$this->getConfirmedPass()) {
			$mymail=$_SESSION['email'];
			$stmt=$pdo->prepare("UPDATE user SET password='$pass2' WHERE email='$mymail'");
			$stmt->execute();
			//header("Location:home.php?Change=success");
		}else{
			echo "Passords do not match";
		}

	}
}

?>







