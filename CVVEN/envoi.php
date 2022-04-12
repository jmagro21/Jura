<?php
session_start();

include('BaseD.php');


$idutilisateur =$_SESSION['id'];
$idchambre=$_SESSION['idch'];
$datedeb=$_POST['datedebut'];
$datefin=$_POST['datefin'];
if (!isset($_POST['optionsupp'])) {
    $optionsupp='of';
    
}else{
    $optionsupp=$_POST['optionsupp'];
}
$valider=1;



       $inser = "INSERT INTO reservation 
       SET id_utilisateur='".$idutilisateur."',id_chambre='".$idchambre."',dated='".$datedeb."',datef='".$datefin."',pensionC='".$optionsupp."',valider='".$valider."'";
       $res = $db->prepare($inser);
       $ex = $res->execute();
?>
<html>
    <head>
        <title>Validation...</title>
        
        <?php include('Header.php'); ?>
    </head>

    <body>
    <?php
    if($_SESSION['mail']!=0){
        header("Refresh: 5; url=membre.php");
        echo "Votre requête a bien été prise en compte.<br><br><i>Redirection en cours...</i>";
    }else{
        header('Refresh: 5; url=confirmation.php');
        echo "votre réservation à bien été prit en compte, vous devez juste mettre votre mail.<br><br><i>Redirection en cours...</i>";
    }
        
    ?>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

        <?php include('Footer.php'); ?>
    </body>
</html>

<?php
?>