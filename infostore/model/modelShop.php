<?php 
function shop1()
{
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req='select * from produit';
	$res=$conn->query($req);
	

	return $res;
}
?>