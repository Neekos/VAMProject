<?php 

class SignController 
{
	public function ActionIndex()
	{
		
		require_once (ROOT.'/view/sign/signin.php');
		return true;
	}
<<<<<<< HEAD


	public function ActionLogin()
	{

		$username = '';
		$password = '';

		if (isset($_POST['login'])) {
			$username = $_POST['username1'];
			$password = $_POST['password1'];

			$errors = false;

			if(!Sign::checkName($username)){
				$errors[] = 'Логин не должно быть короче 2 символов';
			}
			if(!Sign::checkPassword($password)) 
			{
				$errors[] = 'Пороль не должнен быть короче 4 символов';
			}

			$userID = Sign::checkUserData($username, $password);

			if($userID == false) {
				$errors[] = 'Логин или пароль неверны!';
			} else {
				Sign::auth($userID);
				$ID = Sign::checkLogged(); 
				$user=Sign::getUser($ID); 
				
				header("Location: /");
			}
	

		}
		$getall = Sign::getall();
		print_r($getall);
		require_once (ROOT.'/view/sign/signin.php');
		return true;
	}
	public function ActionLogout()
	{
		unset($_SESSION['user']);
			
		header("Location: /main/ ");

	}

=======
>>>>>>> Виктор
}
?>