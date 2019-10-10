<?php 
	/**
	* 
	*/
	class Galereya
	{
		public function GetViewPhoto(){
			$db = Db::getConnection();

			$result = $db->query('SELECT galereya.id, FROM galereya');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$photolist = array();
			
			$i = 0;

			while ($row  = $result->fetch()) {
				$photolist[$i]['id'] = $row['id'];
				$i++;
			}
			return $photolist;
		}
	}
 ?>