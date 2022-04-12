<?php
include('BaseD.php');


$inser = "INSERT INTO 'reservation'('id_utilisateur', 'id_chambre', 'pensionC', 'valider')
VALUES (1, 5, 'on', 1)";
$db->exec($inser);

?>