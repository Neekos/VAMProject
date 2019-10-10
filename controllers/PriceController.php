<?php 
	/**
	* 
	*/
	class PriceController
	{
		
		public function actionIndex(){
			$serviceList=CMS::getServiceList();	
			require_once(ROOT.'/view/price/price.php');
			return true;
		}

	}
 ?>