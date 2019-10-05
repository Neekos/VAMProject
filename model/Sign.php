<?php 

class Sign {
	public static function register($name,$username,$password,$email)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO user (name, username, password, email) VALUES (:name, :username, :password, :email)';
		$pass=md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':username', $username, PDO::PARAM_STR);
		$result->bindParam(':password', $pass, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);

		return $result->execute();
		
	}
	public static function checkName($name) 
	{
		if(strlen($name)>=2) {
			return true;
		}
		return false;
	}
	public static function checkPassword($password) 
	{
		if(strlen($password)>=4) {
			return true;
		}
		return false;
		
	}
	public static function confirmPassword($password)
	{
		if($password==$_POST['password-confirm'])
			return true;
		return false;	
	}
	public static function checkEmail($email) 
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	public static function checkLoginExists($username) 
	{
		$db = Db::getConnection();
		$sql = 'SELECT COUNT(*) FROM user WHERE username = :username';

		$result = $db->prepare($sql);
		$result->bindParam(':username', $username, PDO::PARAM_STR);
		$result->execute();

			if($result->fetchColumn())
				return true;
			return false;
	}
	public static function checkUserData($username, $password)
	{
		$db = Db::getConnection();
		$sql = 'SELECT * FROM user WHERE username = :username AND password = :password';
		$pass = md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':username', $username, PDO::PARAM_INT);
		$result->bindParam(':password', $pass, PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();
		if($user) {
			return $user['id_user'];
		}

		return false;
	}
	public static function auth($userID)
	{
		
		$_SESSION['user'] = $userID;
	}
	public static function checkLogged()
	{
		

		if(isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		

		
	}
	public static function isGuest()
	{
		if(!empty($_SESSION['user']))
			return false;	
		return true;		
	}
	public static function getUser($id)
	{
		$db = Db::getConnection();
		$sql = 'SELECT * FROM user WHERE id_user = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetch();
	}
	
	
	public static function getuserid($id){
		$db = Db::getConnection();
			
			$result = $db->query('SELECT * from user where id_user ='.$id);
			
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$getuserid = $result->fetch();
			return $getuserid;
	}
	public static function getall(){
		$db = Db::getConnection();
			
			$result = $db->query('SELECT * from user');
			
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$getall = $result->fetch();
			return $getall;
	}
}


?>
