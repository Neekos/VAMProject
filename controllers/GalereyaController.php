<?php 
/**
* Создаю галерею и учусь работать со структурой сайта 
*/
class GalereyaController
{
	public function actionIndex(){
		require_once(ROOT.'/view/galereya/galereya.php');
		return true;
	}

	#Тут будет функция просмотра 
	public function actionViewphoto(){
			$result = Galereya::GetViewPhoto(); 
			require_once (ROOT.'/view/galereya/galereya.php');
			return true;
	}

	#Тут будет функция добавления 
	public function actionAddphoto(){

	} 

	#Тут будет функция Редактированя 
	public function actionEditphoto(){

	}
	
	#Тут будет функция удаления 
	public function actionDeletephoto(){

	}
}

 ?>