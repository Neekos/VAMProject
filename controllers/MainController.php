<?php
class MainController {


	public function actionIndex()

	{	
		$serviceList=CMS::getServiceList_3();							
		require_once (ROOT.'/view/main/main.php');
		return true;
	}
}
?>