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
    <?php include 'navbar.php';?>

          <!--Billeterie-->
          <div class="container">
              <div class="col text-center">
                <h2>BILLETS</h2>
                <h3>Découvrez nos types de billets et <br>réservez vos places pour une aventure inoubliable!</h3>
  
            </div>
            &nbsp;
            <div class="row">
                <h2>Nos billets de la saison:</h2>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-4 text-center">
                    <div class="container" id="cont_bg">
                        <h3 id="B" class="d-inline-block">BILLET SEMAINE</h3>
                        <div class="container" id="tarifs">
                        </div>
                    </div>

                    
                </div>
                <div class="col-4 text-center">
                    <div class="container" id="cont_bg">
                        <h3 id="B" class="d-inline-block">BILLET WEEKEND</h3>
                        <div class="container" id="tarifs">
                        </div>    
                    </div>
                    
                </div>
                <div class="col-4 text-center">
                    <div class="container" id="cont_bg">
                        <h3 id="B" class="d-inline-block">BILLET PREMIUN</h3>
                        <div class="container" id="tarifs">
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
        </nav>
    </body>


    <style>
        .nav-link{
            color: purple;
            font-size: large;
            margin-right: 40px;
            font-weight: 500;
        }
        h2{
            font-weight: 900;
        }
        #cont_bg{
            height: 300px;
            background-image: url("Images/park.jpg");
            border-radius: 10px;
        }
        #B{
            background-color: rgb(237, 136, 153);
            border-radius: 10px;
            
        }
        #tarifs{
            height: 85%;
            width: 85%;
            background-color: white;
            border-radius: 10px;
        }
      </style>
</html>