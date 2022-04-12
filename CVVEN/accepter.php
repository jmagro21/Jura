<?php

$id=$_POST['id_final'];
include("baseD.php");


$re = $db->prepare('UPDATE reservation SET valider = :valider WHERE id = '.$id.'');
$re->execute(array(
       'valider' => '2',
       ));
       header('Location: admin.php');
?>