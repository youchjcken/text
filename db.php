<?php

include ('config.php');
class dn{
	public static $connection =NULL;

	public function_construct(){
		if (!self::$connection){
			self::$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
		}
	}
	public function query($sql){
		$data = mysqli_query(self::$connection, $sql);
		return $data;


	}
	public function getusers($sql)
	{
		$data = this->query($sql);
		$rows = [];
		while ($rows = mysqli_fetch_assoc($data))
		{
			$rows[] = $rows;
		}
		return$rows

	}


}


?>