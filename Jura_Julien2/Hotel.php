
<?php
//include('Nhotel.php');
include('BaseD.php');
include('Image.php');
$db->exec('SET NAMES utf8');
$sql = "SELECT * FROM chambre";
$request = $db->query($sql);
$chambre = $request->fetchAll();
?>
<div id="container3">
    

    <?php
    for($i = 0; $i < sizeof($chambre); $i++){
        $achambre = $chambre[$i];
        echo"<img src=\"image/".$achambre['id']."/Chalet.jpg\" height='50%' width='50%' />";
    ?>
    <form id="1" action="Reservation.php" method="post">
    <?php
        echo "<h1>".$achambre['nom']."</h1>";
        echo "<p>".$achambre['descript']."</p>";
        echo "<p>Cette chambre possède ". $achambre['lit'] ." lits.</p>";
        if($achambre['special']==1){
            echo "<p>Ce logement est amenagé pour les personnes en situation de handicape</p>";
        }
    ?>
        <input type="hidden" name="lit" value="<?php echo $achambre["lit"]?>">
        <input type="hidden" name="special" value="<?php echo $achambre["special"]?>">
        <input type="hidden" name="id" value="<?php echo $achambre["id"]?>">
        <input type="submit" id='submit' value="En savoir plus / Réserver" >
    </form>
    <?php
    }
    ?>
</div>