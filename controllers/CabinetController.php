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

 		
 	
 	}




?>