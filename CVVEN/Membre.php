<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: Connexion.php');
    exit();
}
if (($_SESSION['adm'])==1) {
    header('Location: admin.php');
    exit();
}
?>
</div>

<html>
    <head>
        <title>Espace membre</title>
        
        <?php include('Header.php'); ?>
    </head>

    <body>
    
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <div id="container">
        Bienvenue <?php echo ($_SESSION['login']); ?> !<br />
        <a href="Deconnexion.php">Déconnexion</a>
        </div>

            <?php
        include('BaseD.php');
        $db->exec('SET NAMES utf8');
        $sql = "SELECT * FROM reservation WHERE id_utilisateur='".$_SESSION['id']."'";
        $request = $db->query($sql);
        $reservation = $request->fetchAll();
        ?>
        <div id="container3">
            <?php
            for($i = 0; $i < sizeof($reservation); $i++){
                $affiche = $reservation[$i];

                $id = $affiche["id_chambre"];
                
                $achambre = "SELECT * FROM chambre WHERE id='".$id."'";
                $reque = $db->query($achambre);
                $chambre = $reque->fetch();
                echo"<img src=\"image/".$id."/Chalet.jpg\" height='25%' width='25%' />";
            ?>
            
            <form id="1">
            <?php
            
                echo "<h1>".$chambre['nom']."</h1>";
                echo "<p>".$chambre['descript']."</p>";
                echo "<p>Cette chambre possède ".$chambre['lit'] ." lits.</p>";
                if($affiche['pensionC']=='on'){
                    echo "<p>Vous avez prit la chambre en pension complète.</p>";
                }else{
                    echo "<p>Vous n'avez pas prit la chambre en pension complète.</p>";
                }
                echo "<p>Vous avez réservé pour le ".$affiche['dated'] ." jusqu'au ".$affiche['datef']."</p>";
                if($affiche['valider']==1){
                    echo "<p>Votre réservation n'a pas encore été validée par un administrateur.</p>";
                }else if($affiche['valider']==2){
                    echo "<p>Votre réservation a été validée par un administrateur.</p>";
                }else{
                    echo "<p>Votre réservation a été refusé par un administrateur. Elle sera supprimée prochainement. Vous pouvez retentez de réserver.</p>";
                    echo "<p>motif du refus : ".$affiche['note'].".</p>";
                }
            ?>
            </form>
            <?php
            }
            ?>
            </div>        
    </body>
    <?php include('Footer.php'); ?>
</html> 