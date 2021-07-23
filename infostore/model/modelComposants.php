<?php 
function Composants1()
{
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	
			$req='select * from produit where produit.idcateg = 4 ';
			$res=$conn->query($req);
	

	return $res;
}
function pcportable1(){
	
	
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	
			$req='select * from produit where produit.idcateg = 1 or produit.idcateg = 2';
			$res=$conn->query($req);
	

	return $res;
	
	
}
function peripherique1(){
	
	
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req='select * from produit where produit.idcateg = 3';
			$res=$conn->query($req);
	

	return $res;
	
	
}
function pcbureau1(){
	
	
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req='select * from produit where produit.idcateg= 5';
			$res=$conn->query($req);
	

	return $res;
	
	
}

?>