<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <?php include('Header.php'); ?>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>

<title>Connexion</title>
                <div id="container">
                    <!-- zone de connexion -->

                    <form action="verification.php" method="POST">
                        <h1>Connexion</h1>

                        <label><b>Email</b></label>
                        <input type="text" placeholder="Entrer votre Email" name="login" required>

                        <label><b>Mot de passe</b></label>
                        <input type="password" placeholder="Entrer le mot de passe" name="pass" required>


                        <input type="submit" id='submit' value='Se Connecter' >
                        <a href="Inscription.php">Inscription</a>

                        <?php
                        if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                    
                ?>
                
            </form>
        </div>
        
        <?php include('Footer.php'); ?>
    </body>
</html> 