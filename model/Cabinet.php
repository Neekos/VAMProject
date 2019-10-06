<?php

 class Cabinet {

 	public static function addDairy() {

			$db = Db::getConnection();

			if (isset($_POST['add_diary'])){
				$title = $_POST['title'];
				$discription = $_POST['discription'];
				$p_date = $_POST['p_date'];
				
			$result = $db->query("INSERT INTO `Diary` (`ID`,`title`, `discription`, `p_date`) VALUES (Null,'".$title."','".$discription."','".$p_date."')");
	        
			header("Location: /cabinet/diary/");
			}
			return true;
		}

	public static function getDiaryList() 
	{
	
			
			$db = Db::getConnection();
			$result = $db->query('SELECT diary.ID, diary.title, diary.discription, diary.p_date FROM diary');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$diaryList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$diaryList[$i]['ID'] = $row['ID'];
				$diaryList[$i]['title'] = $row['title'];
				$diaryList[$i]['discription'] = $row['discription'];
				$diaryList[$i]['p_date'] = $row['p_date'];
				$i++;

			}
			return $diaryList;
			
	}	
}




  
?>