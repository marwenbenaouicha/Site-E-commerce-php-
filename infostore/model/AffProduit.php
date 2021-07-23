<?php 
function AffProduit(){
			 $servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'achat');
			$req='select * from produit ';
			$res=$conn->query($req);
}
?>