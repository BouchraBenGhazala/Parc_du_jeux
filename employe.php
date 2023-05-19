<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Employe</title>
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
</head>
<body>
    <?php include'navEmp.php';?>
<?php
    // session_start();

    // Check if the user is logged in as an employee
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'employe') {
        // Access the user type and perform actions for employees
        echo 'Connecté en tant qu employé';
        echo "<br>Bienvenue ".$_SESSION['username2'];
        // Rest of your code for the employe.php file
        ?>


        <?php
    }   
    else {
        // Redirect the user if not logged in as an employee
        header('Location: logout.php'); // Redirect to the login page or appropriate page
        exit;
    }
?>
</body>
</html>