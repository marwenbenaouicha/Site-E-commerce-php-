<html lang="en">
 
 <title>INFO STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
<div >

          <div class="col-md-6 order-md-last d-flex">
            <form action="../index.php" method="GET" class="bg-white p-5 contact-form">
              <div class="form-group">
			   <h3> Ajouter un produit </h3>
                <input type="text" id="code" name="code" class="form-control" placeholder="code" required="">
              </div>
              <div class="form-group">
                <input type="text" id="code" name="description" class="form-control" placeholder="description" required="">
              </div>
              <div class="form-group">
                <input name="prix" class="form-control" placeholder="prix" required="">
              </div>
              <div class="form-group">
                <input name="qte" class="form-control" placeholder="qte" required="">
              </div>
			  <div class="form-group">
                <input name="idcateg" class="form-control" placeholder="idcateg" required="">
              </div>
			  <div class="form-group">
                <input name="image" class="form-control" placeholder="image" required="">
              </div>
              
              <div class="form-group">
                <input type="submit" value="Ajouter" class="btn btn-primary py-3 px-5">
              </div>
			   <input type='hidden' name='action' value='ajouterProduit'>
            </form>
           <div class="col-md-6 order-md-last d-flex">
            
			<form action="../index.php" method="GET" class="bg-white p-5 contact-form">
              <div class="form-group">
			  <h3> Supprimer un produit </h3>
                <input type="text" id="code" name="code" class="form-control" placeholder="code" required="">
              </div>
              <div class="form-group">
                <input type="text" id="code" name="description" class="form-control" placeholder="description" required="">
              </div>
              
              
              <div class="form-group">
                <input type="submit" value="Supprimer" class="btn btn-primary py-3 px-5">
              </div>
			  <input type='hidden' name='action' value='supprimerProduit'>
            </form>
                    <div class="col-md-6 order-md-last d-flex">
		  <form action="../index.php" method="GET" class="bg-white p-5 contact-form">
            
              <div class="form-group">
			   <h3> Modifier un produit </h3>
                <input type="text" id="code" name="code" class="form-control" placeholder="code" required="">
              </div>
              <div class="form-group">
                <input type="text" id="code" name="description" class="form-control" placeholder="description" required="">
              </div>
              <div class="form-group">
                <input name="prix" class="form-control" placeholder="prix" required="">
              </div>
              <div class="form-group">
                <input name="qte" class="form-control" placeholder="qte" required="">
              </div>
			  <div class="form-group">
                <input name="idcateg" class="form-control" placeholder="idcateg" required="">
              </div>
			  <div class="form-group">
                <input name="image" class="form-control" placeholder="image" required="">
              </div>
              
              <div class="form-group">
                <input type="submit" value="modifier" class="btn btn-primary py-3 px-5">
              </div>
			  <input type='hidden' name='action' value='modifierProduit'>
            </form>
          <form action="../index.php" method="GET" class="bg-white p-5 contact-form">
              
                <input type="submit" value="affichier les produits" class="btn btn-primary py-3 px-5">
				<input type='hidden' name='action' value='AffProduit'>
             
            </form>
          </div>
		  
          </div>
		  
          </div>

       
   
   </html>