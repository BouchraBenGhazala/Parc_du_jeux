<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Attraction page</title>
  </head>
  <body>
    <header>
      <?php include 'navbar.php'; ?>  
    </header>
    <!-- Carousel -->
    <div id="demo" class="carousel slide " data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">


        <div class="carousel-item active" >
          <a href="#Forte">
            <img src="Images/carousel1.jpg"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#Famille">
            <img src="Images/famille.png"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#Petit">
            <img src="Images/enfant.png"  class="d-block w-100">
          </a>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
    
    <!-- Attraction -->
    <div class="container justify-content-center">
      <h1 id="Forte">SENSATION FORTE</h1>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 310px; border-radius: 20px">
          <img src="Images/grand8.jpG" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Les Montagnes Russes</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/bateau-pirate.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le Bateau Pirate</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/RoueFerris.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Roue Ferris</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/donjon-extreme.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le Dojon de l'Extreme</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/manege-tournant.jpeg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le grand huit</h4>
            <i class="bi bi-person-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/crampus.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Krampus Expedition</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- *********************************************************************  -->
    <div class="container justify-content-center">
      <h1 id="Famille">Jeux en familles</h1>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/serpent.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le Serpent</h4>
            <i class="bi bi-person-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/riviere.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Riviére</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/shlitt.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">La Descente En Schlitt</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/hante.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">La Maison Hante</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/train.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le train</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/aqua.jpeg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Voiture Aqua</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- ****************************************************** -->
    <div class="container justify-content-center">
      <h1 id="Petit">Pour les petits</h1>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/petit_serpent.png" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le Petit Serpent</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/amusement_park.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Ascenco</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/Caroussel.jpeg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Carousel</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 3%">
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/presentation_1.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Le train tch-tch</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/tourne.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">Chaise Volante</h4>
            <i class="bi bi-person-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 300px; border-radius: 20px">
          <img src="Images/as.jpg" alt="" class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">L'Escadrille</h4>
            <i class="bi bi-people-fill">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- lien pour billetttttttttttttttttttsssssssssss*************-->
    <div class="row" id="txt" >
      <div class="col-md-10">
        <h1 class="Attract">LES ATTRACTIONS DU PARC</h1>
        <p style="font-size:18px;">Venez découvrir les jeux passionnants que notre parc a à offrir. Que vous soyez seul, 
          en famille ou entre amis, <wbr> vous trouverez ici des divertissements adaptés à tous les âges. 
          Plongez-vous dans l'aventure, défiez vos amis et créez des souvenirs inoubliables.
          Nous vous attendons avec impatience pour une journée remplie de joie et de plaisir !
        </p>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-outline-success btn-lg" type="button">Découvrir</a>
      </div>
    </div>



    <style>
      #demo{
         margin: 2%; 
      }
      div img{
        border: 2px solid white;
        border-radius: 20px;
      }
      .Attract{
        font-weight: bold;
        letter-spacing: 5px;
        word-spacing: 7px;
      }
      #txt{
        background-color: rgb(0,0,0,0.25);
        margin: 2%;
        border: 2px solid white;
        border-radius: 20px;
        padding: 3%;
      }
      #txt div a{
        width: 170px;
      }
      #Image-card{
        border-radius: 20px;
        height: 195px;
      }
      h1 div div{
        width: 300px; 
        height: 310px; 
        border-radius: 20px;
      }
    </style>
  </body>

</html>