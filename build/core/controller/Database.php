<?php
class Database {
	public static $db;
	public static $con;
	
	function Database(){
	}

	function connect(){
		$con = new mysqli("localhost", "user", "pass", "db");
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>