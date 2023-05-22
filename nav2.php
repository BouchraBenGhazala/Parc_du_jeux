<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

  <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .sub-menu {
      display: none;
      font-weight: bold;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: white;
      border-collapse: collapse;
    }

    li:hover > .sub-menu {
      display: table;
    }

    li > .sub-menu > a {
      display: table-cell;
      padding: 5px 10px;
      color: black; /* Couleur du texte */
      text-decoration: none; /* Supprime le soulignement */
    }

    li > .sub-menu > a:last-child {
      margin-right: 0; /* Supprime l'espacement droit du dernier mot du sous-menu */
    }

    li > .sub-menu {
      font-weight: inherit;
    }
  </style>
</head>
<body>
   
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand fit-content surbrillance" href="Acceuil.php">
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
          <div class="dropdown-menu dropdown-menu-white sub-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <table style="border:all;">
              <tr  >
                <td ><a class="surbrillance dropdown-item" href="Attraction.php">Attraction</a></td>
                <td><a class="surbrillance dropdown-item" href="#">Restaurant</a></td>
                <td><a class="surbrillance dropdown-item" href="#">Boutique</a></td>
              </tr>
            </table>
          </div>
        </li>
        <!-- Autres éléments du menu -->
      </ul>
    </div>

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
      <?php
        }
      ?>
    </ul>
  </nav>

  <div>
    <!-- Contenu de la page -->
  </div>

  <style>
    .nav-link {
      color: purple;
      font-size: large;
      margin-right: 40px;
      font-weight: 500;
    }
    #dcn {
      border-color: white;
    }
  </style>

</body>
</html>
