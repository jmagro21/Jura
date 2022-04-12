<?php
session_start();
if (($_SESSION['adm'])!=1) {
    header('Location: index.php');
    exit();
}

include("Header.php");
include("baseD.php");
$db->exec('SET NAMES utf8');
$id_chambre = $_POST['id_chambre'];
$id = $_POST['id'];

?>
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<?php
$achambre = "SELECT * FROM chambre WHERE id='".$id_chambre."'";
$reque = $db->query($achambre);
$chambre = $reque->fetch();
$affi = "SELECT * FROM reservation WHERE id='".$id."'";
$request = $db->query($affi);
$affiche = $request->fetch();
?>

<form id="1" action="accepter.php" method="POST">
            <?php
                $id_chambre = $chambre['id'];
                echo "<h1>".$chambre['nom']."</h1>";
                echo "<p>".$chambre['descript']."</p>";
                echo "<p>Cette chambre possède ".$chambre['lit'] ." lits.</p>";
                if($affiche['pensionC']=='on'){
                    echo "<p>il a choisit une chambre pension complète.</p>";
                }else{
                    echo "<p>il n'a pas choisit une chambre pension complète.</p>";
                }
                echo "<p>il a réservé pour le ".$affiche['dated'] ." jusqu'au ".$affiche['datef']."</p>";
            ?>
            <input type="hidden" name="id_final" value="<?php echo $id?>">
            <input type="submit" id='submit' value="Accepter" >
            </form>
            
            <form id="1" action="refuser.php" method="POST">
            <label><b>Explication</b></label>
            <input type="text" placeholder="Type de refus" name="note" required>
            
            <input type="hidden" name="id_final" value="<?php echo $_POST["id"]?>">
            <input type="submit" id='submit' value="Refuser" >
            </form>
<?php


include("footer.php");
?>