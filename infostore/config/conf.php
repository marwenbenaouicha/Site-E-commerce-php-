<?php
class Conf {
	static private  $database= array('hostname' => 'localhost',
		'database' => 'achat',
		'login' => 'root',
		'password' =>'');
	static public function getLogin() {
		return self::$database['login'];
	}
	static public function getPass() {
		return self::$database['password'];
	}
	static public function getHost() {
		return self::$database['hostname'];
	}
	static public function getBase() {
		return self::$database['database'];
	}

}

?>