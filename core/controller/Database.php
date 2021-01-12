<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b23aee601ac876";$this->pass="c4dea43b";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_e29dc24f2a1b3df";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
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
