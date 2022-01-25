<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: Connexion.php');
    exit();
}
?>

<html>
    <head>
        <title>Espace membre</title>
        
        <?php include('Header.php'); ?>
    </head>

    <body>
    
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <div id="container">
        Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
        <a href="Deconnexion.php">Déconnexion</a>
        </div>
        <?php include('Footer.php'); ?>
    </body>
</html> 