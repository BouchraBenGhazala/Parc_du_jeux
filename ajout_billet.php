<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Tarif</title>
</head>
<body>
    Ajouter un tarif :<br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Billet : <input type="text" name="tarif"><br><br>
        Adulte : <input type="number" name="adulte"><br><br>
        Enfant : <input type="number" name="enfant"><br><br>
        <button type="submit" name="ajouter">Ajouter</button>
        <button type="submit" name="modifier">Modifier</button>
        <button type="submit" name="supprimer">Supprimer</button>
    </form>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parc_du_jeux";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $tarif = $_POST['tarif'];
    $adulte = $_POST['adulte'];
    $enfant = $_POST['enfant'];
    
    if(isset($_POST['modifier'])) {
        $modif = $conn->prepare('UPDATE billets SET adulte = ?, enfant = ? WHERE descr = ?');
        $modif->bind_param("iis", $adulte, $enfant, $tarif);
        $modif->execute();
    } elseif(isset($_POST['ajouter'])) {
        $sql2 = $conn->prepare("INSERT INTO billets (descr, adulte, enfant) VALUES (?, ?, ?)");
        $sql2->bind_param("sii", $tarif, $adulte, $enfant);
        $sql2->execute();
    } elseif(isset($_POST['supprimer'])) {
        $supp = $conn->prepare('DELETE FROM billets WHERE descr = ?');
        $supp->bind_param("s", $tarif);
        $supp->execute();
    }
    
    $sql = "SELECT * FROM billets";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Tarif</th><th>Adulte</th><th>Enfant</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["descr"]."</td><td>".$row["adulte"]." "."</td><td>".$row["enfant"]." "."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
