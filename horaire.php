
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
</style>
</head>
<body>
<div class="schedule">
  <h2>Horaire</h2>
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
$dbname = "parc_du_jeux";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête SQL pour récupérer les horaires
$sql = "SELECT jour, heures_ouverture, heures_fermeture FROM horaires";
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

    
</body>
</html>