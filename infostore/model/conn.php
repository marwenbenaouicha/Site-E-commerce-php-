<?php
	require_once"config/conf.php";
	class Conn{
		public static $pdo;
		public static function Init(){
			try{
				$host=Conf::getHost();
				$db=Conf::getBase();
				$login=Conf::getLogin();
				$password=Conf::getPass();
				self::$pdo=new pdo("mysql:host=$host;dbname=$db","$login","$password");
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $except){
				echo"Echec de la connexion: ".$except–>getMessage();
				die();
			}
		}
		static public function getPdo() {
		return self::$pdo;
	}
	}
	Conn::Init();
?>