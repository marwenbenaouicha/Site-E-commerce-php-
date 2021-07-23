<?php
$conn = new PDO('mysql:host=localhost;dbname=achat;charset=utf8', 'root', '');
session_start();

if(!isset($_SESSION['panier']))
{
	$_SESSION['panier']=array();
	
	
	
}
if(isset($_GET['prod'])  && isset($_GET['qte'])&& isset($_GET['prix']))
	
	{
		$panier=&$_SESSION['panier'];
		
		$code=$_GET['prod'];
		$qte=$_GET['qte'];
		$prix=$_GET['prix'];
		$name= $_GET['name'];
		
	
		$b=false;
		 foreach($panier as $clef => $valeur){
                if($clef==$code)
				{
					$b=true;
				}
            }
			if(!$b)
			{
				$panier[$code]=array();
				$panier[$code][0]=$qte;
				$panier[$code][1]=$prix;
				$panier[$code][2]=$name;
			
				echo ('false');
				
				
			}
			else
			{
			    if($panier[$code][0]+$qte<=9) {
                    $panier[$code][0] += $qte;
                    $panier[$code][1] += $prix*$qte;
                    $panier[$code][2] = $name;
                     
                    echo ('true');

                }
			    else{
                    echo ('qte9');

                }
				
			}
				
				
		$Pseudo=$_SESSION['Pseudo'];
		
		$qtef= $panier[$code][0];
		$name=$panier[$code][2] ;
	  $prixf=$panier[$code][1];
				
                
		
		
		
	}



?>