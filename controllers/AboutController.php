<?php 
	/**
	* 
	*/
	class AboutController
	{
		
		public function actionIndex(){
			require_once(ROOT.'/view/about/about.php');
			return true;
		}
	}
 ?>