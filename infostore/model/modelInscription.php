<!DOCTYPE html>
<html>

<body>
<table>
<tr><td> &nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<?php
require('client.php');
/*require('model.php');*/
require_once "conn.php";


class inscription{


 function verif_mail($mail)
{
	if(preg_match(
	"/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/" , $mail ))
		{
			return true ;
		}
		else {
					return false ;
		}
} 
function verif_mdp ($mdp)
{
	if (preg_match("/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/" , $mdp ))
		{
			return true ;
		}
		else 
		{
			return false;
		}
} 

 function check_mdp_format($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);                                                             
	$speciaux = preg_match('/!$# %/',$mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || !$speciaux || strlen($mdp) > 8)
	{
		return false;
	}
	else 
		return true;
}
function inscription1($nom,$prenom,$pseudo,$mail,$Adr,$tel,$password,$password1,$r1,$r2){
/*$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';*/
if (isset($_GET['submit']))
{
   /* on test si les champ sont bien remplis */
   
		/* on test si les deux mdp sont bien identique */
        if ($password==$password1)
        {
            // On crypte le mot de passe
            /*$_GET['password'] = md5($_GET['password']);*/
			
			if ($r1)	
			{
				if($r2)
				{
					/*$client["nom"]=$_POST["nom"];
					$client["prenom"]=$_POST["prenom"];
					$client["email"]=$_POST["E-mail"];
					header("index.php");*/






                        
                       
						$pseudo=$pseudo;
						$nom=$nom;
						$prenom=$prenom;
						$email=$mail;
						$telephone=$tel;
						$adresse=$Adr;
						//$genre=$_POST['titre'];
						$genre='male';
						$password=$password;
						$client=new Client($pseudo, $nom, $prenom, $email, $telephone, $adresse, $genre, $password);
						$client->Ajout(conn::$pdo);
						
						echo "hello ".$nom." ".$prenom."  svp connectez de nouveau" ;
						$_SESSION["Pseudo"]=$pseudo;
						require('vue/about.php');
						







					
					
				}
				else return( "Format du mot de passe non correct");
				
			}
			else return("votre E-mail n'est pas valide" );
        }
        else return("Les mots de passe ne sont pas identiques");
    

		
}
}}
?>


</td></tr>
</table>
</body>
</html>