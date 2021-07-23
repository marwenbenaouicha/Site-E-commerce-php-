<?php
session_start();
  $conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');

		
if (isset($_SESSION['Pseudo'] )&& isset($_SESSION['panier'] ))
{
    
    $total=$_SESSION['total'];
    $panier=$_SESSION['panier'];
  $Pseudo=$_SESSION['Pseudo'];
		
 $qtef= $panier[$code][0];
 $name=$panier[$code][2] ;
$prixf=$panier[$code][1];
		
$sql = "UPDATE produit set qte=qte-$qtef where description=  '$name' " ;
$nb=$conn->exec($sql);
$sql1 = "INSERT  INTO commande  VALUES ('$idClient','$Pseudo',$total) " ;
$conn->exec($sql1);
$sql2 = "INSERT  INTO lignecommande (qtef,prixf,Pseudo) VALUES ($qtef, $prixf, '$Pseudo') " ;
 $conn->exec($sql2);

   
    }

unset($_SESSION['panier']);
unset($_SESSION['total']);
header('Location:../index.php');

?>