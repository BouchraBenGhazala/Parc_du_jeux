<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parc d'attractions - Horaires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
      
        .schedule {
  margin-top: 20px;
}

#schedule-table {
  width: 100%;
}

#schedule-table th {
  text-align: center;
}

#schedule-table td {
  text-align: center;
}
#calendar {
    max-width: 300px;
    margin: 0 auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    text-align: center;
    padding: 5px;
    border: 1px solid black;
}

th {
  color:purple;
  background-color: #ccc;
}


</style>
<?php include 'C:\xampp\htdocs\Parc_du_jeux\navbar.php';?>

</head>
<body>
<!--<div id="calendar"></div>

<script src="horaire.js"></script>-->

<div class="schedule">
  <table id="schedule-table" class="table table-bordered">
    <tr>
      <th>Jour</th>
      <th>Heures d'ouverture</th>
      <th>Heures de fermeture</th>
    </tr>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parc2";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête SQL pour récupérer les horaires
$sql = "SELECT jour, heures_ouverture, heures_fermeture FROM horaire";
$result = $conn->query($sql);
// Vérifier si des résultats ont été trouvés
if ($result->num_rows > 0) {
    // Afficher les horaires dans la table
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["jour"] . "</td><td>" . $row["heures_ouverture"] . "</td><td>" . $row["heures_fermeture"] . "</td></tr>";
    }
} else {
    echo "Aucun horaire trouvé.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
  </table>
</div>
<!--
  dans php:
  $jour_char = $_POST['jour_char'];
$jour_int = $_POST['jour_int'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];

// Utilisez les variables comme vous le souhaitez dans votre code PHP

// Exemple : Affichage des valeurs
echo "Jour (abrégé) : " . $jour_char . "<br>";
echo "Jour (numérique) : " . $jour_int . "<br>";
echo "Mois : " . $mois . "<br>";
echo "Année : " . $annee . "<br>";
   
-->

    
</body>
</html>