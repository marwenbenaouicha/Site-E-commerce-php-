<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Liste des produits</title>
    <!-- Bootstrap core CSS -->
	<link href="inc/bootstrap.min.css" rel="stylesheet">
	
  </head>
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  <body>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-1">
	<h3>Liste des Produits</h3>
	<table id="customers">
		<thead class="thead-light " >
		
  
		<tr>
			<th>Code</th>
			<th>Qunatité</th>
			<th>Prix</th>
			<th>Nom produit</th>
			<th>id Catégorie</th>
			
		</tr>
		</thead>
		<?php 
		/*$req="SELECT * FROM produit";
		
 	    $result=$conn->query($req); 
	    $produits = $result;
		->fetch_assoc()
	
		foreach($produits as $p){*/ ?>
		<?php 
			$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'achat');
			$req='select * from produit ';
			$res=$conn->query($req);
			while($p=$res->fetch_array())
			{
			?>
		<tr>
			<td> <?php echo $p[0]?></td>
			<td> <?php echo $p[1]?></td>
			<td> <?php echo $p[2]?></td>
			<td> <?php echo $p[3]?></td>
			<td> <?php echo $p[4]?></td>
			
			
		</tr>
		<?php } ?>
	</table>
	</main>
  </body>
</html>