<?php
session_start();
?>
<html>
    <head>
        <title>Espace membre</title>
        
        <?php include('Header.php'); ?>
    </head>

    <body>
    
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <div id="container">
                    <!-- zone de connexion -->
                    <form action="confirmation2.php" method="POST">
                        <b>Confirmation de vos données</b>
                        <h1> </h1>

                        <label><b>Mail</b></label>
                        <input type="text" placeholder="Pour continuer mettez votre mail" name="mail" required>

                        <input type="submit" id='submit' value='Se Connecter' >
</div>

        <?php include('Footer.php'); ?>
    </body>
</html>