<?php
session_start();
include('BaseD.php');
$login = $_SESSION['login'];

$mail = $db->quote(htmlspecialchars($_POST['mail']));
$req = $db->prepare('UPDATE utilisateur SET Mail = :Mail WHERE pseudo = '.$login.'');
$req->execute(array(
       'Mail' => $mail,
       ));
       $_SESSION['mail']=$_POST['mail'];
       header('Location: membre.php');
       ?>