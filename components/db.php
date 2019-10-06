<?php 
// объявление класса "подключения базы данных"
class db 

{
	// объявление функции подключения базы данных
	public static function getConnection()
	{
		// прописываем путь к параметрам базы 
		$paramsPath = ROOT . '/config/db_params.php';

		$params = include($paramsPath);

		$dns = "mysql:host={$params['host']};dbname={$params['dbname']}";

		$db = new PDO($dns, $params['user'], $params['password']);

		return $db;
	}
}


?>