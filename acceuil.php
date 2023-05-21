<!DOCTYPE html>
<html lang="fr">

<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
 

	<style>

  .bi-person-fill {
    font-size: 3em; /* Modifiez cette valeur pour ajuster la taille */
  }
	html, body {
  height: 100%;
  margin: 0;
  padding: 0;

}

.surbrillance:hover{
  text-shadow: 0 0 30px black ;
  background-clip: text;
}

	table {
		color: purple; /* Couleur d'écriture du texte du tableau */
			}

	.tooltip {
		position: relative;
		display: inline-block;
		cursor: pointer;
		color: none;

	}

	.tooltip:hover .tooltiptext {
		display: block;
	}

	.tooltiptext {
		display: none;
		position: absolute;
		top: 20px;
		left: 0;
		padding: 10px;
		text-align: center;
		line-height: 100%;
	}
	a{
		color: purple;
		text-decoration: none ;
		background: none;/* Annuler le soulignement */
	}


	.tooltip {
	  margin-left: 20px; /* Ajustez la marge selon vos besoins */
	}
	@media (max-width: 768px) {
  #accueil,#parc {
    display: none;
  }
	#qa,#infos {
    text-align: left;

}
}
.container {
  display: flex;
}
.container2 {
  display: flex;
  justify-content: flex-end;
}
.navbar-logo {
  width: 50px; /* Définir la largeur souhaitée */
  height: auto; /* Laisser la hauteur ajuster proportionnellement */
  margin: 0; /* Réinitialiser les marges par défaut */
  display: flex;
  align-items: center;
  justify-content: center;
}
.icon-container {
      display: flex;
      align-items: center;
    }

    .icon-container .bi {
      margin-right: 15px; /* Ajoutez un espace entre les icônes */
    }

    .search-icon-container {
      justify-content: start; /* Modifiez cette valeur pour ajuster l'emplacement horizontal */
    }

    .person-icon-container {
      justify-content: end; /* Modifiez cette valeur pour ajuster l'emplacement horizontal */
    }
		.navbar .navbar-nav .nav-link {
      font-weight: bold;
    }
		.sub-menu {
  display: none; /* Masquer les sous-menus par défaut */
	font-weight: bold;
}

li:hover > .sub-menu {
  display: flex;; /* Afficher les sous-menus au survol de l'élément parent */
  flex-direction: row; /* Afficher les sous-menus horizontalement */
  position: absolute; /* Positionner les sous-menus par rapport à l'élément parent */
  top: 100%; /* Positionner les sous-menus en dessous de l'élément parent */
  left: 0; /* Aligner les sous-menus à gauche de l'élément parent */
}
li > .sub-menu {
  font-weight: inherit; /* Hérite de la propriété font-weight du parent */
}
.carousel-caption h5 {
font-size: 24px;
font-weight: bold;
}

.carousel-caption p {
font-size: 16px;
}
.sticky-footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}
.hidden-footer {
  visibility: hidden;
  transition: visibility 0.3s ease;
}
header {
  margin-left: 100px;
}
</style>
<script>
window.addEventListener('scroll', function() {
  var scrollPosition = window.pageYOffset;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  if (scrollPosition + windowHeight >= documentHeight) {
    // L'utilisateur a atteint la fin de la page
    document.querySelector('footer').classList.remove('hidden-footer');
  } else {
    // L'utilisateur n'a pas encore atteint la fin de la page
    document.querySelector('footer').classList.add('hidden-footer');
  }
});
</script>

<script>
function displaySubMenu(show,id) {
  var sousMenu = document.getElementById(id);
  if (show) {
    sousMenu.classList.add("show");
  } else {
    sousMenu.classList.remove("show");
  }
}

function adjustContentMargin() {
  var footerHeight = document.querySelector('.sticky-footer').offsetHeight;
  document.body.style.marginBottom = footerHeight + 'px';
}

// Appeler la fonction lors du chargement initial de la page
window.addEventListener('load', adjustContentMargin);
// Appeler la fonction lors du redimensionnement de la fenêtre
window.addEventListener('resize', adjustContentMargin);
</script>
</head>
<header>
	
</header>
 <body>
 <nav  class="navbar navbar-expand-lg">
			<a class="navbar-brand fit-content surbrillance" href="#">
				<img src="Images/p3.jpeg" class="navbar-logo" alt="">
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
					<li class="nav-item">
						<a class="nav-link active surbrillance" aria-current="page" href="#">S'authentifier</a>
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

	 <div id="carouselExample" class="carousel slide bg-danger text-white border rounded h-5 w-100" data-bs-ride="carousel" data-bs-interval="3000">
	 	<div class="carousel-inner">
	 		<div class="carousel-item active">
	 			<img src="Images/p1.jpg" class="d-block w-100" alt="Slide 1">
	 			<div class="carousel-caption">
	 				<h5>Découvrez1</h5>
	 				<p>Description de la slide 1</p>
	 			</div>
	 		</div>
	 		<div class="carousel-item">
	 			<img src="Images/p2.jpg" class="d-block w-100" alt="Slide 2">
	 			<div class="carousel-caption">
	 				<h5>Découvrez2</h5>
	 				<p>Description de la slide 2</p>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	 <div id="carouselExample" class="carousel slide bg-danger text-white border rounded h-5 w-100" data-bs-ride="carousel" data-bs-interval="3000">
	 	<div class="carousel-inner">
	 		<div class="carousel-item active">
	 			<img src="Images\colorful-ferris-wheel-with-clear-blue-sky.jpg" class="d-block w-100" alt="Slide 1">
	 			<div class="carousel-caption">
	 				<h5>Découvrez1</h5>
	 				<p>Description de la slide 1</p>
	 			</div>
	 		</div>
	 		<div class="carousel-item">
	 			<img src="Images/p2.jpg" class="d-block w-100" alt="Slide 2">
	 			<div class="carousel-caption">
	 				<h5>Découvrez2</h5>
	 				<p>Description de la slide 2</p>
	 			</div>
	 		</div>
	 	</div>

      



	 <hr><hr><!-- Footer -->
<?php include "footer.php"?>
</body>

</html>
