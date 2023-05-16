<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Horaire</title>
</head>
<body>
    Ajouter Horaire:<br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Jour: <input type="text" name="jour"><br><br>
        Heure d'ouverture: <input type="time" name="heures_ouverture"><br><br>
        Heure de fermeture : <input type="time" name="heures_fermeture"><br><br>
        <button type="submit" name="ajouter">Ajouter</button>
        <button type="submit" name="modifier">Modifier</button>
        <button type="submit" name="supprimer">Supprimer</button>
        <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parc2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$jour=$_POST['jour'];
$heures_d_ouverture=$_POST['heures_ouverture'];
$heures_de_fermeture=$_POST['heures_fermeture'];



if(isset($_POST['modifier'])){
$modif = $conn->prepare('UPDATE horaire SET heures_ouverture = ? AND heures_fermeture=? WHERE jour = ?');
$modif->bind_param("si", $heures_d_ouverture,$heures_de_fermeture, $jour);
$modif->execute();}
elseif(isset($_POST['ajouter'])){
$sql2=$conn->prepare("INSERT INTO horaire (jour,heures_ouverture,heures_fermeture) VALUES (?,?,?)");
$sql2->execute(array($jour,$heures_d_ouverture,$heures_de_fermeture));}
elseif(isset($_POST['supprimer'])){
    $supp=$conn->prepare('DELETE FROM horaire WHERE jour = ?');
$supp->bind_param("i",$jour);
$supp->execute();}

$sql="select * from horaire";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>JOUR</th><th>HEURE D'OUVERTURE</th><th>HEURE FERMETURE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["jour"]."</td><td>".$row["heures_ouverture"]." "."</td><td>".$row["heures_fermeture"]." "."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
?>

</body>
</html>