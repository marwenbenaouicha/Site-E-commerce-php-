<?php
require('model/modelAccueil.php');
require('model/modelInscription.php');
require('model/modelConnexion.php');
require('model/modelProduit.php');
require('model/modelShop.php');
require('model/modelComposants.php');

function getAcceuil1()
{
$res = getAcceuil();
require('vue/affichageAccueil.php');
}
function peripherique()
{

require('vue/Périphérique et Accessoires.php');
}

function espaceAdmin()
{

require('vue/espaceAdmin.php');
}
function inscri()
{

require('vue/inscription.php');
}
function conn()
{

require('vue/connexion.php');
}
function cart()
{

require('vue/cart.php');
}
function pcbureau()
{
$res = pcbureau1();
require('vue/ordinateur de bureau.php');
}
function Composants()
{
$res = Composants1();
require('vue/ordinateurs portables.php');
}
function pcportable()
{
$res = pcportable1();
require('vue/Composants Informatique.php');
}

function shop()
{
$res = shop1();
require('vue/shop.php');
}

function contact()
{
require('vue/contact.php');
}
function about()
{
require('vue/about.php');
}
function inscription($nom,$prenom,$pseudo,$mail,$Adr,$tel,$password,$password1)
{
$inscription=new inscription();
 $r1=$inscription->verif_mail($mail);
 $r2=$inscription->verif_mdp ($password);
 $r3=$inscription->check_mdp_format($password);
 
$r3=$inscription->inscription1($nom,$prenom,$pseudo,$mail,$Adr,$tel,$password,$password1,$r1,$r2);
echo "$r3";

/*$res = getAcceuil();
require('vue/affichageAccueil.php');*/
}
function connexion($Pseudo,$pass)
{
	$connexion=new connexion();
$res =$connexion->connexion1($Pseudo,$pass);


require('vue/affichageAccueil.php');
}
function ajouterProduit($code,$description,$prix,$qte,$idcateg,$image)
{
	ajouterProduit1($code,$description,$prix,$qte,$idcateg,$image);

}
function   supprimerProduit($code,$description){
	supprimerProduit1($code,$description);
}
function modifierProduit($code,$description,$prix,$qte,$idcateg,$image)
{
	modifierProduit1($code,$description,$prix,$qte,$idcateg,$image);

}
function AffProduit()
{
	/*$res=AffProduit();*/
require('vue/AffProduit.php');
}
?>