<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'getAcceuil') {
        getAcceuil1();
    }
    if ($_GET['action'] == 'inscription') {
        inscription( $_GET['nom'], $_GET['prenom'], $_GET['pseudo'], $_GET['mail'], $_GET['Adr'], $_GET['tel'], $_GET['password'], $_GET['password1']);
        
        }
    if ($_GET['action'] == 'connexion') {
        connexion( $_GET['Pseudo'], $_GET['pass']);
        
        }
	if ($_GET['action'] == 'ajouterProduit') {
		
        ajouterProduit( $_GET['code'], $_GET['description'],$_GET['prix'], $_GET['qte'],$_GET['idcateg'], $_GET['image']);
        
        }
	if ($_GET['action'] == 'supprimerProduit') {
        supprimerProduit( $_GET['code'], $_GET['description']);
        
        }
	if ($_GET['action'] == 'modifierProduit') {
		echo "hello";
        modifierProduit( $_GET['code'], $_GET['description'],$_GET['prix'], $_GET['qte'],$_GET['idcateg'], $_GET['image']);
        
        }
	if ($_GET['action'] == 'AffProduit') {
        AffProduit();
       
        }
		if ($_GET['action'] == 'contact') {
 contact();}
 if ($_GET['action'] == 'about') {
 about();}
 if ($_GET['action'] == 'shop') {
        shop();
    }  
if ($_GET['action'] == 'Composants') {
        Composants();
    }  
if ($_GET['action'] == 'pcportable') {
        pcportable();
    }  
if ($_GET['action'] == 'peripherique') {
        peripherique();
    }  
	
if ($_GET['action'] == 'pcbureau') {
        pcbureau();
    }  
if ($_GET['action'] == 'cart') {
        cart();
    }
if ($_GET['action'] == 'conn') {
        conn();
    }
if ($_GET['action'] == 'inscri') {
        inscri();
    }
if ($_GET['action'] == 'espaceAdmin') {
        espaceAdmin();
    }

	
	
	
    }

else
{
	getAcceuil1();
}
      
