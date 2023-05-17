
<?php

?>

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
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="#">
              <img src="Images/logo.jpg" width="100" height="100" alt="logo du parc">
            </a>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link " href="#"><span >Acceuil</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Infos pratiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="billets.html">Billeterie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
                
            

              <!--Right side-->

            <ul class="navbar-nav m-sm-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-person"></i>S'authentifier</a>
                </li>
            </ul>
          </nav>
          
          <div>

          </div>

            <a class="navbar-brand" href="acceuil.php">
              <img src="Images/logo.jpg" width="100" height="100" alt="logo du parc">
            </a>
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link " href="acceuil.php"><span >Le parc</span></a>
                </li>

                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        
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

              <!--Right side-->

              <ul class="navbar-nav m-sm-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-person"></i>S'authentifier</a>
                </li>
          </nav>

          <style>
            .nav-link{
                color: purple;
                font-size: large;
                margin-right: 40px;
                font-weight: 500;
            }

            
          </style>



          </style>


            </div>
        </nav>
    </body>
</html>