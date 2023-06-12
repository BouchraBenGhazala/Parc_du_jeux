<?php 
try {
    $conn = new PDO('mysql:hostname=localhost;dbname=parc2','root','');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getmessage());
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attraction-modif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css">

</head>
<body>
    <?php include 'navEmp.php' ?>
    <div class="container modif "><br><br>
        <center class="h3 text-light">Entrer le nom de l'attraction que vous voulez modifiez :</center>
        <div class=" d-flex justify-content-center">
            <form  method="get">
                <input type="text" name="nom" maxlength=30 style="width: 370px;"> <br><br>
                <input type="submit" name='submit' class="btn btn-outline-primary" value="Confirm" id='confirm_button'>
            </form> 
        </div> 
         
        
        <h1 class="text text-center text-primary text-decoration-underline"  id="modif-form">Formulaire de modification</h1>
        <div class="container  d-flex justify-content-center">
            <form method="get" enctype="multipart/form">
                <center class="h3 text-light">Nouveau nom :</center> <input type="text" name="nv-nom" class="input-modif" maxlength=30><br><br>
                <center class="h3 text-light">Nouveau Description :</center><textarea name="nv-desc" id="" cols="60" rows="5" ></textarea><br><br>
                <center class="h3 text-light">Capacité :</center><input type="number" name="nv-nbr" class="input-modif" ><br><br>
                <center class="h3 text-light">Durée :</center> <input type="time" name="nv-time" class="input-modif"><br><br>
                <center class="h3 text-light">Taille minimale :</center><input type="number" name="nv-taille" class="input-modif" max=200><br><br>
                <center class="h3 text-light">Telecharger une nouvelle image :</center><input type="file" name="nv-image" class="input-modif">(.jpg/.png) <br><br>
                <input type="submit" value="Apply" class="btn btn-outline-primary btn-block" name='apply'>
            </form>
        </div>
        
                
    </div>
    <style>
        .input-modif{
        width : 100%;
        height:4.5%;
    }
      #Image-card{
        border-radius: 20px;
        height: 270.010px;
        width: 334.656px;
      }
     input[type=submit]{
      float: right;
     }
     .modif{
      border: 10px solid purple;
      border-radius: 100px;
      margin-top: 5%;
      background-color: purple;
      height: 1000px;
      justify-content: center;
     }
     #card{
        display: none;
     }
    </style>
    <script>
        var carte = document.getElementById('card');
       var submit = document.getElementById('confirm_button');
       submit.addEventListener('click',function(event){
        event.preventDefault();
        carte.style.visibility = 'visible';
       });
      

    </script>
</body>
</html>