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
            session_start();//session_start() nous permet ici d'appeler toutes les sessions actives de l'utilisateur, enregistrées avec $_SESSION['nom_que_vous_souhaitez']
            unset($_SESSION['login']);//unset() détruit une variable, si vous enregistrez aussi l'id du membre (par exemple) vous pouvez comme avec isset(), mettre plusieurs variables séparés par une virgule:
            //unset($_SESSION['pseudo'],$_SESSION['id']);
            header("Refresh: 3; url=connexion.php");//redirection vers le formulaire de connexion dans 5 secondes
            echo "Vous avez été correctement déconnecté du site.<br><br><i>Redirection en cours, vers la page de Connexion...</i>";
            ?>

            <?php include('Footer.php'); ?>
    </body>
</html> 