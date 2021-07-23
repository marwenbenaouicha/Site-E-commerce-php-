<?php
	require_once "config/Conf.php";
	class conn {
		
		public static $pdo;

		public static function Init(){
			try{
				$host=Conf::getHost();
				$db=Conf::getBase();
				$login=Conf::getLogin();
				$password=Conf::getPass();
				self::$pdo=new pdo("mysql:host=$host;dbname=$db","$login","$password");
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $except){
				echo "Echec de la connection: ".$except->getMessage();
				die();
			}
			
		}
	}
	conn::Init()
?>