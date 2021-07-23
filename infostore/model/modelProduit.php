<?php
function ajouterProduit1($code,$description,$prix,$qte,$idcateg,$image){
	 $servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'achat');
$sql = "INSERT  INTO produit (code, description, prix, qte,idcateg,image)
            VALUES ( '$code', '$description', '$prix', '$qte','$idcateg','$image') " ;
 
  $requete = mysqli_query($conn, $sql); 
  
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header('location:vue/espaceAdmin.php');
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
}
function modifierProduit1($code,$description,$prix,$qte,$idcateg,$image){
	 $servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'achat');
$sql = "DELETE FROM produit WHERE code='$code'";
 $requete = mysqli_query($conn, $sql); 
$sql = "INSERT  INTO produit (code, description, prix, qte,idcateg,image)
            VALUES ( '$code', '$description', '$prix', '$qte','$idcateg','$image') " ;

  $requete = mysqli_query($conn, $sql); 
  
  if($requete)
  {
    echo("La modification a été correctement effectuée") ;
    header('location:vue/espaceAdmin.php');
  }
  else
  {
    echo("La modification à échouée") ;
}}
  function supprimerProduit1($code,$description){
	 $servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'achat');
$sql = "DELETE FROM produit WHERE code='$code'";
  echo "produit supprimé" ;	    
  
  $requete = mysqli_query( $conn ,$sql) ;
  if($requete)

  {
   echo("produit supprimé") ;
    header('location:vue/espaceAdmin.php');
  }
  else
  {
    echo("La suppression à échouée") ;
}}