<?php
class MainController {


	public function actionIndex()
	{				
		require_once (ROOT.'/view/main/main.php');
		return true;
	}
}
?>