<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Tarif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: white;
            color: purple;
        }
        .container {
            margin-top: 50px;
            text-align: center;
            color: purple;
        }
        table {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            border: 1px solid white;
            margin:auto;
        }
        table td {
            color: black;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            width: 50%;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: purple;
            border-color: purple;
        }
    </style>
    <?php include 'navEmp.php';?>
</head>
<body>
    <div class="container">
        <h1>Modifier Attraction :</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tarif">Ancien nom :</label>
                <input type="text" class="form-control" id="tarif" name="nom_avant" required>
            </div>
            <div class="form-group">
                <label for="adulte">Nouveu Nom :</label>
                <input type="text" class="form-control" id="adulte" name="nom_apres">
            </div>
            <div class="form-group">
                <label for="enfant">Description :</label><br>
                <input type="text" name="desc" id="enfant" class="form-control">
            </div>
            <div class="form-group">
                <label for="adulte">Capacité :</label>
                <input type="number" class="form-control" id="adulte" name="Capacite">
            </div>
            <div class="form-group">
                <label for="adulte">Durée :</label>
                <input type="text" class="form-control" id="adulte" name="duration" placeholder="...min ...s" >
            </div>
            <div class="form-group">
                <label for="adulte">Taille minimale :</label>
                <input type="number" class="form-control" id="adulte" name="taille_min">
            </div>
            <div class="form-group">
                <label for="adulte">Nouvelle image :</label>
                <input type="file" class="form-control" id="adulte" name="nv_image">
            </div>
            <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
           <br><br>
        </form>
        
        
        <?php 
        try {
            $conn = new PDO('mysql:hostname=localhost;dbname=parc2','root','');
        } catch (PDOException $e) {
            die("Erruer de connexion" . $e->getmessage());
        }
        
        $ancien_nom = strtolower($_POST['nom_avant']) ;
        $nv_nom = $_POST['nom_apres'];
        $nv_desc = $_POST['desc'];
        $nv_capac = $_POST['Capacite'];
        $nv_duree = $_POST['duration'];
        $nv_taille = $_POST['taille_min'];
        
                
        
        if(isset($_POST['modifier']) and $_SERVER['REQUEST_METHOD']=='POST') {
            if(!empty($_POST['nom_apres'])){
                echo $_POST['nom_apres'];
                $sql = $conn->prepare("UPDATE attraction SET nom_attra=?  WHERE LOWER(nom_attra)=?; ");
                $sql->execute(array($nv_nom,$ancien_nom));
            }
            if(!empty($_POST['desc'])){
                
                $sql1 = $conn->prepare("UPDATE attraction SET descr=? WHERE LOWER(nom_attra)=?;");
                echo "wlya"; 
                $sql1->execute(array($nv_desc,$ancien_nom));
               
            }
            if(!empty($_POST['Capacite'])){
                echo $_POST['Capacite'];
                $sql = $conn->prepare("UPDATE attraction SET capacite=? WHERE LOWER(nom_attra)=?;");
                $sql->execute(array($nv_capac,$ancien_nom));
            }
            if(!empty($_POST['duration'])){
                echo $_POST['duration'];
                $sql = $conn->prepare("UPDATE attraction SET duree=? WHERE LOWER(nom_attra)=? ;");
                $sql->execute(array($nv_duree,$ancien_nom));

            }
            if(!empty($_POST['taille_min'])){
                echo $_POST['taille_min'];
                $sql = $conn->prepare("UPDATE attraction SET taille_min=? WHERE LOWER(nom_attra)=? ;");
                $sql->execute(array($nv_taille,$ancien_nom));
            }
            if(isset($_FILES['nv_image']) && !empty($_FILES['nv_image'])){
                $name = $_FILES['nv_image']['name'];
                $tmp = $_FILES['nv_image']['tmp_name'];
                if(move_uploaded_file($tmp , 'Images/'.$name)){
                    echo "File uploaded successfuly";
                    $sql = $conn->prepare("UPDATE attraction SET image_attra=? WHERE LOWER(nom_attra)=? ;");
                    $sql->execute(array('Images'.$name,$ancien_nom));

                }
            }



        } 
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
