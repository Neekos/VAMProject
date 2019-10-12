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

		public function actionView($id)
		{
		
		
		$serviceView = array();

		$serviceView = CMS::getServiceById($id);
		print_r($serviceView);
		require_once (ROOT.'/view/price/view.php');
		
		
		return true;
		}

	}
 ?>