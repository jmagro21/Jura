<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil | Jura</title>
        <?php include('Header.php'); ?>
    </head>

    <body>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <?php
                session_start();
                if($_SESSION['login'] !== ""){
                    $user = $_SESSION['login'];
                    // afficher un message
                    // echo "Bonjour $user, vous êtes connecté";
                }
            ?>
        
            <?php include('Footer.php'); ?>
    </body>
</html>