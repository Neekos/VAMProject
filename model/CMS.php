<?php 

class CMS {

	public static function add_service($id) {

		

			$db = Db::getConnection();

			if (isset($_POST['add_service'])){
				$name = $_POST['name'];
				$discription = $_POST['discription'];
				$type = $_POST['type_service'];
				$price = $_POST['price'];
				
			if(is_uploaded_file($_FILES['image']['tmp_name']))
			{
				
				move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/template/image/service/'.$name.'.jpg');
				$image = '/template/image/service/'.$name.'.jpg';
			}
		
			$result = $db->query("INSERT INTO `service` (`ID`,`name`, `discription`, `type_service`, `price`,`image`) VALUES (Null,'".$name."','".$discription."','".$type."','".$price."','".$image."')");
	        
			header("Location: /cabinet/cms/");
			}				

			return true;
		}
	public static function getServiceList() 
	{
	
			
			$db = Db::getConnection();
			$result = $db->query('SELECT service.id, service.name, service.discription, type_service.type, service.price FROM service LEFT JOIN type_service ON service.type_service=type_service.ID');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$serviceList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$serviceList[$i]['id'] = $row['id'];
				$serviceList[$i]['name'] = $row['name'];
				$serviceList[$i]['discription'] = $row['discription'];
				$serviceList[$i]['type'] = $row['type'];
				$serviceList[$i]['price'] = $row['price'];
				$i++;

			}
			return $serviceList;
			
	}
	public static function getServiceList_3() 
	{
	
			
			$db = Db::getConnection();
			$result = $db->query('SELECT service.id, service.name, service.discription, type_service.type, service.price FROM service LEFT JOIN type_service ON service.type_service=type_service.ID LIMIT 3');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$serviceList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$serviceList[$i]['id'] = $row['id'];
				$serviceList[$i]['name'] = $row['name'];
				$serviceList[$i]['discription'] = $row['discription'];
				$serviceList[$i]['type'] = $row['type'];
				$serviceList[$i]['price'] = $row['price'];
				$i++;

			}
			return $serviceList;
			
	}
	public static function selectType()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM type_service');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$selectType = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$selectType[$i]['ID'] = $row['ID'];
				$selectType[$i]['type'] = $row['type'];
				$i++;

			}
			return $selectType;
		}
	public static function getServiceById($id) 
	{
		
		
		$id = intval($id);

		

		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('SELECT service.id, service.name, service.discription, type_service.type, service.price, service.image FROM service LEFT JOIN type_service ON service.type_service=type_service.ID
				WHERE service.id='. $id);
			

			$ServiceView = $result->fetch();
			
			
		}
		return $ServiceView;
	}	

}


?>