<?php  
// Class Auth and Registration
	class Sign {
// Function registration
		public static function registration($username, $email, $password) {

			$db = Db::getConnection();

			$sql = 'INSERT INTO user (username, email, password)' . 'VALUES (:username, :email, :password)';
			$pass=md5($password);
			$result = $db->prepare($sql);
			$result->bindParam(':username', $username, PDO::PARAM_STR);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->bindParam(':password', $pass, PDO::PARAM_STR);

			return $result->execute();

		}
//Check entered username
		public static function checkName($username) {
			if (strlen($username) >= 2) {
				return true;
			}
			return false;
		}
//Check entered password
		public static function checkPassword($password) {
			if (strlen($password) >= 6) {
				return true;
			}
			return false;
		}
//Check repeat Login
		public static function CheckUserExists($username) {

			$db = Db::getConnection();

			$sql = "SELECT COUNT(*) FROM user WHERE username = :username";

			$result = $db->prepare($sql);
			$result->bindParam(':username',$username, PDO::PARAM_STR);
			$result->execute();

			if($result->fetchColumn())
				return true;
			return false;
		}
//check user data
		public static function checkUserData($username, $password) {
			$db = Db::getConnection();

			$sql = "SELECT * FROM user WHERE username = :username AND password = :password";
			$pass = md5($password);
			$result = $db->prepare($sql);
			$result->bindParam(':username', $username, PDO::PARAM_STR);
			$result->bindParam(':password', $pass, PDO::PARAM_STR);
			$result->execute();

			$user = $result->fetch();
			if($user) {
				return $user['id_user'];
			}
			return false;
		}
//authorization
		public static function auth($userID)
		{
			$_SESSION['user'] = $userID;
		}
//if user do not authorization 
		public static function isGuest() {
			if(isset($_SESSION['user'])) {
				return false;

			}
			return true;
		}
//exit user
		public static function LogOut() {
			unset($_SESSION['user']);
			header("location: /");
		}

		public static function confirmPassword($password)
		{
			if($password==$_POST['password-confirm'])
				return true;
			return false;	
		}

	}

?>
