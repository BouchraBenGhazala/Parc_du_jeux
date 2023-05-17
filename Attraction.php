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
          <a href="#">
            <img src="Images/carousel1.jpg"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#">
            <img src="Images/famille.png"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#">
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
     <!--
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
-->
    <!-- Attraction -->
    <div class="container">
      <h1>SENSATION FORTE</h1>
      <div class="row">
        <div class="card shadow-lg m-3 col" style="width: 300px; height: 300px; border: border: 5px solid black;
        border-radius: 20px;">
          <img src="Images/grand8.jpg" alt="" class="card-img-top" width="100%">
          <div class="car-body pl-3">
            <h4 class="card-title text-success">Le grand huit</h4>
            <i class="bi bi-person">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>

        <div class="card shadow-lg m-3 col" style="width: 300px; height: 300px; border: border: 5px solid black;
        border-radius: 20px;">
          <img src="Images/grand8.jpg" alt="" class="card-img-top">
          <div class="car-body pl-3">
            <h4 class="card-title text-success">Le grand huit</h4>
            <i class="bi bi-person">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        <div class="card shadow-lg m-3 col" style="width: 300px; height: 300px; border: border: 5px solid black;
        border-radius: 20px;">
          <img src="Images/grand8.jpg" alt="" class="card-img-top">
          <div class="car-body pl-3">
            <h4 class="card-title text-success">Le grand huit</h4>
            <i class="bi bi-person">170cm</i>
            <i class="bi bi-1-circle"></i>
          </div>
        </div>
        
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
    </style>
  </body>

</html>