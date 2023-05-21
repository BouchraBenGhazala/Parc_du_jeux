
<?php

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
  
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <?php
    session_start();
    ?>

  </head>
  <body>
    <!--
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <img src="Images/logo.jpg" width="100" height="100" alt="logo du parc">
      </a>
      <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link " href="acceuil.php"><span >Acceuil</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Infos pratiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="billets.php">Billeterie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    -->
    <nav  class="navbar navbar-expand-lg">
			<a class="navbar-brand fit-content surbrillance" href="#">
				<img src="Images/p3.jpeg" width="100" height="100" class="navbar-logo" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle surbrillance active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Votre parc
						</a>
						<ul  class="dropdown-menu dropdown-menu-white sub-menu" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class=" surbrillance dropdown-item" href="#">Attraction</a></li>
							<li><a class="surbrillance dropdown-item" href="#">Restaurant</a></li>
							<li><a class="surbrillance dropdown-item" href="#">Boutique</a></li>
						</ul>

					</li>
					<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle active surbrillance" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Infos pratiques
								</a>
								<ul  class="dropdown-menu dropdown-menu-white sub-menu" aria-labelledby="navbarDarkDropdownMenuLink">
									<li><a class=" surbrillance dropdown-item" href="#">Horaires</a></li>
									<li><a class="surbrillance dropdown-item" href="#">Contact</a></li>
									<li><a class="surbrillance dropdown-item" href="#">Tarifs</a></li>
								</ul>
							</li>
						</ul>
					</div>

						<li id="qa" class="nav-item  ">
						<a class="nav-link active surbrillance">
						 Q&A
						</a>
					</li>
				</ul>
			</div>
	</nav>


        <!--Right side-->


              <ul class="navbar-nav m-sm-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="authentif.php"><i class="bi bi-person"></i>S'authentifier</a>
                  </li>
                  <?php
                      if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') { 
                        ?>
                        <li class="nav-item">
                        <form action="logout.php" method="POST">
                          <button type="submit" class="nav-link" id="dcn">Déconnexion</button>
                      </form>
                      </li>
                    <?php }
                  ?>

              </ul>


    </nav>

    <div>

    </div>
    <footer class="sticky-footer text-center text-lg-start bg-light text-muted">
 <!-- Section: Social media -->
 <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
	 <!-- Left -->
	 <div class="me-5 d-none d-lg-block">
		 <span>Votre Parc est connecté:</span>
	 </div>
	 <!-- Left -->

	 <!-- Right -->
	 <div>
		 <a href="" class="me-4 text-reset">
			 <i class="fab fa-facebook-f "></i>
		 </a>
		 <a href="" class="me-4 text-reset">
			 <i class="fab fa-twitter"></i>
		 </a>
		 <a href="" class="me-4 text-reset">
			 <i class="fab fa-google"></i>
		 </a>
		 <a href="https://www.instagram.com/?hl=fr" class="me-4 text-reset">
			 <i class="fab fa-instagram"></i>
		 </a>
		 <a href="" class="me-4 text-reset">
			 <i class="fab fa-linkedin"></i>
		 </a>
		 <a href="" class="me-4 text-reset">
			 <i class="fab fa-github"></i>
		 </a>
	 </div>
	 <!-- Right -->
 </section>
 <!-- Section: Social media -->

 <!-- Section: Links  -->
 <section class="">
	 <div class="container text-center text-md-start mt-5">
		 <!-- Grid row -->
		 <div class="row mt-3">
			 <!-- Grid column -->
			 <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				 <!-- Content -->
				 <h6 class="text-uppercase fw-bold mb-4">
					 <i class="fas fa-gem me-3"></i>KH2B
				 </h6>
				 <p>
					 Un parc ordinaire oui mais les sensations qu'il engendre.Hate de découvrir?
					 Alors réserve ton billet!
				 </p>
			 </div>
			 <!-- Grid column -->

			 <!-- Grid column -->
			 <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
				 <!-- Links -->
				 <h6 class="text-uppercase fw-bold mb-4">
					 Products
				 </h6>
				 <p>
					 <a href="#!" class="text-reset">A propos du parc </a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Conseil et sécurité</a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Recrutement</a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Mentions Légales</a>
				 </p>
			 </div>
			 <!-- Grid column -->

			 <!-- Grid column -->
			 <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
				 <!-- Links -->
				 <h6 class="text-uppercase fw-bold mb-4">
					 Liens utiles
				 </h6>
				 <p>
					 <a href="#!" class="text-reset">Billeterie</a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Parametres</a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Commandes</a>
				 </p>
				 <p>
					 <a href="#!" class="text-reset">Centre d'aide</a>
				 </p>
			 </div>
			 <!-- Grid column -->

			 <!-- Grid column -->
			 <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
				 <!-- Links -->
				 <h6 class="text-uppercase fw-bold mb-4">Contactez nous</h6>
				 <p><i class="fas fa-home me-3"></i> Bd Nil Casablanca Maroc</p>
				 <p>
					 <i class="fas fa-envelope me-3"></i>
					 KH2B@gmail.com
				 </p>
				 <p><i class="fas fa-phone me-3"></i> + 212 652227998</p>
				 <p><i class="fas fa-print me-3"></i> + 212 2878549868</p>
			 </div>
			 <!-- Grid column -->
		 </div>
		 <!-- Grid row -->
	 </div>
 </section>
 <!-- Section: Links  -->

 <!-- Copyright -->
 <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
	 © 2023 Copyright:
	 <a class="text-reset fw-bold" href="https://mdbootstrap.com/">KH2B.com</a>
 </div>
 <!-- Copyright -->
</footer>
<!-- Footer -->

    <style>
      .nav-link{
        color: purple;
        font-size: large;
        margin-right: 40px;
        font-weight: 500;
      }
      #dcn{
        border-color: white;
      }
    </style>

  </body>
</html>