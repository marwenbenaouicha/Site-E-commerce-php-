<?php 
require_once"conn.php";
function getAcceuil()
{
	try
	{
		
	    $conn = new conn();
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req='select * from produit';
	$res=$conn::getPdo()->query($req);
	

	return $res;
}
?>