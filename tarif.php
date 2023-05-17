<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Interface Tarifs</title>
  <style>
    .pricing {
  margin-top: 20px;
}

.pricing h2 {
  text-align: center;
}

.price-card {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
}

.price-card h3 {
  margin-top: 0;
}

.price-card p {
  margin-bottom: 10px;
}

.price {
  font-size: 24px;
  font-weight: bold;
}
</style>
</head>
<body>
     <div class="pricing">
    <h2>Tarifs</h2>
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parc2";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Récupération des tarifs depuis la base de données
    $sql = "SELECT * FROM tarif";
    $result = $conn->query($sql);

    // Affichage des tarifs
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='price-card'>";
        echo "<h3>" . $row['categorie'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p><span class='price'>" . $row['prix'] . " Dhs</span> par personne</p>";
        echo "</div>";
      }
    } else {
      echo "Aucun tarif disponible";
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
    ?>
  </div>
</body>
</html>
