<?php 

 class CabinetController {

 	public function actionIndex() {
 		require_once (ROOT.'/view/cabinet/cabinet.php');
		return true;
 	}

 	public function actionDiary() {
 		
			
			$result=Cabinet::addDairy(); 
			$DiaryList = Cabinet::getDiaryList();
			require_once (ROOT.'/view/cabinet/diary.php');
			return true;
		}

	public function actionGalery() {
 		
			
			
			require_once (ROOT.'/view/cabinet/galery.php');
			return true;
		}
		
 	public function actionCMS() {
 			
			$result=CMS::add_service();
			$selectType=CMS::selectType(); 
			$serviceList=CMS::getServiceList();
			
			require_once (ROOT.'/view/cabinet/cms.php');
			return true;
		}	
 	
 	

 	public function actionRedService($id)
	{
		
		$serviceView = array();
		$serviceView = CMS::getServiceById($id);
		$selectType=CMS::selectType();

		$redService = CMS::redService($id);
		require_once (ROOT.'/view/cabinet/red_service.php');
		return true;
			
	}
	public function actionDelService($id)
	{
		
		
		$delService=CMS::DelService($id);

		return true;
			
	}
}



?>