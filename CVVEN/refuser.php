<?php

include("baseD.php");
$id = $_POST['id_final'];
$valider=10;
$note=$_POST['note'];

$req = $db->prepare('UPDATE reservation SET valider = :valider, note=:note WHERE id = '.$id.'');
$req->execute(array(
       'valider' => $valider,
       'note'=>$note,
       ));
       header('Location: admin.php');

?>