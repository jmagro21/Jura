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
            header("Refresh: 5; url=connexion.php");//redirection vers le formulaire de connexion dans 3 secondes
            echo "Vous vous êtes inscrit avec succès.<br><br><i>Redirection en cours, vers la page de Connexion...</i>";
        ?>

        <?php include('Footer.php'); ?>
    </body>
</html> 