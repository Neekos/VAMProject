<?php
class MainController {


	public function actionIndex()
	{	
		$userID = Sign::checkLogged();			
		require_once (ROOT.'/view/main/main.php');
		return true;
	}
}
?>