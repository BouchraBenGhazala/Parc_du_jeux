<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Reservation</title>
        <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">

    <?php
    session_start();

    $host='localhost';
    // $dbname='test0';
    $dbname='parc_du_jeux';
    $username='root';
    $password='';
    
    try{
        $conn = new mysqli($host, $username, $password, $dbname);
        echo 'Connexion réussie à la base de données';

    }
    catch(Exception $e){
        echo 'Erreur de connexion à la base de données : '.$e->getMessage();
    }
?>

    </head>
    <body>
                
    <?php
    
    // Check if the user is logged in as an employee
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') {
        // Access the user type and perform actions for employees
        echo "<br>".'Connecté en tant que visiteur';
        // echo "<br>"."Bienvenue ".$_SESSION['username'];

        // Rest of your code for the employe.php file

    }
    else {
        // Redirect the user if not logged in as an employee
        header('Location: logout.php'); // Redirect to the login page or appropriate page
        exit;
    }
?>
        <?php

        ?>
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                <img src="Images/p3.jpeg" alt="logo" width="150px">
            </div>
            <div class="row d-flex justify-content-center align-items-center">
            <?php
                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') { ?>
                    <h3>Bienvenue <span id="L"> <?php echo $_SESSION['username'] ?></span></h3>
                <?php
                    } ?>
            </div>
        <div class="row d-flex justify-content-center align-items-center">
            <h4>Sélectionnez <span id="gros">la quantité de billets</span> que vous souhaitez.</h4>
        </div>
        <br>
        <?php
            $sql1 = "SELECT * FROM tarif";
            $result = $conn->query($sql1);

            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                if($row['descr']=="Billet weekend"){
                    $prix_adulte_weekend=$row['adulte'];
                    $prix_enfant_weekend=$row['enfant'];
                }
                
            }
            }
            else{
            echo "Aucun billet disponible";
            }

                        ?>
        <form method="POST">
        <div class="row flex-column flex-sm-row">
            <div class="col-sm-6">
                <div class="container" id="container">
                <div class="row">
                    <h4 id="content" class="text-center ">Billet Weekend</h4>
                </div>
                <br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <h4>Date de visite</h4>
                    </div>
                    <div class="col-sm-6">
                    <input type="date" name="date_visite" id="dvisite" required>
                    </div>                   
                </div>
                <br><br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <p><span id="gras">Adulte </span><?php echo  $prix_adulte_weekend?> <br>12 ans et plus<p>
                    </div>
                    <div class="col-sm-6">
                    <input type="number" name="ajout_adulte" id="adulte">
                    </div>                   
                </div>
                <br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <p><span id="gras">Enfant </span> <?php echo $prix_enfant_weekend?> <br>3 à 11 ans<p>
                    </div>
                    <div class="col-sm-6">
                    <input type="number" name="ajout_enfant" id="enfant">
                    </div>                   
                </div>
                </div>  
            </div>
            <div class="col-sm-6">
                <img src="Images/welcomePark.jpg" alt="welcome" width="450px" id="park">
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <button class="btn btn-primary">Confirmer</button>
        </div>
        <br>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            $currentDateTime = date('Y-m-d H:i:s');

            $id_visit=$_SESSION['visit_id'];
        
            $db1=$conn->prepare("INSERT INTO reservation(date_reserv,id_visit_fk) VALUES (?,?)");
            $db1->execute([$currentDateTime,$id_visit]);

            $sql2 = "SELECT id_reserv FROM reservation ORDER BY id_reserv DESC LIMIT 1";
            $result1 = $conn->query($sql2);
            if ($result1 && $result1->num_rows > 0) {
                $row1 = $result1->fetch_assoc();
                $id_reserv = $row1['id_reserv'];
                
            }

            $sql3="SELECT id_tarif FROM tarif WHERE descr='Billet weekend'";
            $result2=$conn->query($sql3);
            if ($result2 && $result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $id_tarif = $row2['id_tarif'];
                
            }

            $date_visite=$_POST['date_visite'];
            $quantite_adulte=$_POST['ajout_adulte'];
            $quantite_enfant=$_POST['ajout_enfant'];

            // echo $date_visite;
            // echo "<br>".$quantite_adulte;
            // echo "<br>".$quantite_enfant;
            // echo "<br>".$id_reserv;
            // echo "<br>".$id_tarif;
           
            $db2=$conn->prepare("INSERT INTO billet(date_visite,quantité_adulte,quantité_enfant,id_tarif_fk,id_reserv_fk) VALUES (?,?,?,?,?)");
            $db2->execute([$date_visite,$quantite_adulte,$quantite_enfant,$id_tarif,$id_reserv]);
        }
        ?>
        </div>


        <style>
            #park{
                border-radius: 20px;
            }
            #content{
                height: 50px;
                width: 100%;
                background-color: rgb(43, 174, 240);
                border-radius: 5px;
                color: white;
                box-shadow: 1px;
            }
            #container{
                background-color: rgb(248, 248, 248);
                height: 100%;
                border-radius: 5px;
                box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);

            }
            body{
                background-color: white;
                
            }
            #gras{
                font-weight: 500;
            }
            #dvisite,#adulte,#enfant{
                width: 80%;
                border-radius: 10px;
            }
            #gros{
                font-weight: 700;
            }
            #L{
                color: purple;
            }

        </style>

    </body>
</html>