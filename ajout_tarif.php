<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Tarif</title>
</head>
<body>
    Ajouter une tarif:<br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Prix : <input type="number" name="prix"><br><br>
        Categorie: <input type="text" name="categorie"><br><br>
        Description : <input type="text" name="description"><br><br>
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
$prix=$_POST['prix'];
$categorie=$_POST['categorie'];
$description=$_POST['description'];



if(isset($_POST['modifier'])){
$modif = $conn->prepare('UPDATE tarif SET prix = ? WHERE categorie = ?');
$modif->bind_param("si", $prix, $categorie);
$modif->execute();}
elseif(isset($_POST['ajouter'])){
$sql2=$conn->prepare("INSERT INTO tarif (categorie,description,prix) VALUES (?,?,?)");
$sql2->execute(array($categorie,$description,$categorie));}
elseif(isset($_POST['supprimer'])){
    $supp=$conn->prepare('DELETE FROM tarif WHERE categorie = ?');
$supp->bind_param("i",$categorie);
$supp->execute();}

$sql="select * from tarif";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>CATEGORIE</th><th>DESCRIPTION</th><th>PRIX</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["categorie"]."</td><td>".$row["description"]." "."</td><td>".$row["prix"]." "."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
?>

</body>
</html>