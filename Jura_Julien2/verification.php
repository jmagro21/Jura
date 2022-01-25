
<?php
session_start();
if(isset($_POST['login']) && isset($_POST['pass']))
{
    // connexion à la base de données
    include('BaseD.php');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $login = mysqli_real_escape_string($db,htmlspecialchars($_POST['login']));
    $password = md5($_POST['pass']);
 

    if($login !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where pseudo = '".$login."' AND mdp = '".$password."'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['login'] = $login;
           header('Location: index.php');
        }
        else
        {
           header('Location: Connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: Connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: Membre.php');
}
mysqli_close($db); // fermer la connexion
?> 