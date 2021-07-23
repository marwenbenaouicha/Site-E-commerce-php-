<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
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
    <body class="goto-here">
	 <style>
        body {
         background-image: url('../images/insc2.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
		
          }
    </style>
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 29864854</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">infostore@gmail.com</span>
					    </div>
					    
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="connexion.php">Connexion</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	       <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="../index.php?action=shop">Shop</a>
              	
                <a class="dropdown-item" href="../vue/cart.php">Panier</a>
                <a class="dropdown-item" href="../vue/checkout.php">Facture</a>
              </div>
            </li>
			<li class="nav-item"><a href="../vue/inscription.php" class="nav-link">Compte </a></li>
			<li class="nav-item"><a href="../vue/Deconnexion.php" class="nav-link">Deconnexion</a></li>
	          <li class="nav-item"><a href="../index.php?action=about" class="nav-link">A propos</a></li>
	 
	          <li class="nav-item active"><a href="../index.php?action=contact" class="nav-link">Contact</a></li>
            
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	 </br></br></br></br>  
<div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
		 
            <form action="../index.php" method="GET" style= "padding-left: 500px;">
              <div class="form-group">
                <input type="text" name="Pseudo" id="Pseudo" placeholder="Votre email.." class="form-control" required>
              </div>
              <div class="form-group">
               <input type="password" name="pass" id="password" placeholder="Votre password" class="form-contro" required>
              </div>
              <div class="form-group">
                <input type="submit" name="seconnecter" class="btn btn-primary py-3 px-5">
              </div>
			   <input type='hidden' name='action' value='connexion'>
            </form>
          
          </div>
      </div>
	  
      </html>
