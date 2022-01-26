<?php
include('BaseD.php');
include('Nhotel.php');
include('Image.php');
?>
<div id="container3">
    

    <?php
    for($i = 0; $i < sizeof($chambre); $i++){
        $achambre = $chambre[$i];  
    ?>
    
    <img src="image/<?php echo $achambre['id']; ?>/Chalet.jpg" height="50%" width="50%" />

        <form id="1" action="" method="get">

        <h1> <?php echo $achambre['nom']?></h1>
        <p> <?php echo $achambre['descript'] ?></p>
        <p> <?php echo "Cette chambre possède ". $achambre['lit'] ." lits."?></p>
        <?php
        if($achambre['special']==1){
            echo "Ce logement est amenagé pour les personnes en situation de handicape";
            }
        ?>
     <input type="submit" id='submit' value="En savoir plus" >
    </form>
    <?php
    }
    ?>
</div>
