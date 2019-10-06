<?php
class SignController {

	public function actionLogin()
	{
		$username = '';
		$password = '';

		if (isset($_POST['signin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$errors = false;

			$userID= Sign::checkUserData($username, $password);

			if($userID == false) {
				$errors[] = "Неправильный логин или пароль";
			} else {
				Sign::auth($userID);

				header("location: /main/");
			}

		}
		require_once (ROOT.'/view/sign/signin.php');
		return true;
	}

	public function actionRegistration()
	{
			$username= '';
			$email = '';
			$password = '';

			if (isset($_POST['registration'])) {
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
		

			$errors = false;

			if (!Sign::checkName($username)) {			
				$errors[] = "Имя не должно быть меньше 2-х символов";
			}

			if (!Sign::checkPassword($password)) {
				$errors[] = "Пароль не должен быть короче 6-ти символов";
			}
			 
			if(Sign::checkUserExists($username)) {
				$errors[] = "Такой Логин уже ипользуется";
			}

			if(!Sign::confirmPassword($password)) 
			{
				$errors[] = 'Пароли не совпадают';
			}

			if($errors == false) {
				$result = Sign::registration($username, $email, $password);
			}
		}

		require_once (ROOT.'/view/sign/signup.php');
		return true;
	}

	public function actionLogout() {
		Sign::LogOut();
	}
} 
?>