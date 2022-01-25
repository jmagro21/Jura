<?php
$db_username = 'root';
    $db_password = 'root';
    $db_name     = 'jeu';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('Connexion non etablie');
?>