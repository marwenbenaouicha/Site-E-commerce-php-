<?php

require_once"conn.php";


class connexion{


 function connexion1($Pseudo,$pass){

$conn=new conn();
$req="SELECT * FROM client WHERE Pseudo='$Pseudo' and password = '$pass'";
$res=$conn::getPdo()->query($req);

$user = $res->fetch();
if($Pseudo=='admin'){
	if($pass=='admin'){
header('location:vue/espaceAdmin.php');}
else 
{
	echo "mot de passe incorrect";
}
}
else
{if ($user) {
     
	 session_start();
			$_SESSION['Pseudo']=$Pseudo;
			

			header('location:index.php');
			
		
} else {
     echo "le nom d'utilisateur n'existe pas ou votre mot de passe est incorrect";
} }

 }
}
?>
