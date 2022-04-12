
<?php
session_start();
if(isset($_POST['login']) && isset($_POST['pass']))
{
    // connexion à la base de données
    include('BaseD.php');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $login = $db->quote(htmlspecialchars($_POST['login']));
    $password = md5($_POST['pass']);
 

    if($login !== "" && $password !== "")
    {
        $requete = "SELECT * FROM utilisateur where pseudo = ".$login." AND mdp = '".$password."';";
        $exec_requete = $db->query($requete);
        $count = $exec_requete->rowCount();
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
         $adm = "SELECT * FROM utilisateur where pseudo = ".$login." AND mdp = '".$password."';";
         $execute = $db->query($adm);
         $admin = $execute->fetch();
           $_SESSION['login'] = $login;
           $_SESSION['adm']=$admin['adm'];
           $_SESSION['id']=$admin['id'];
           $_SESSION['mail']=$admin['Mail'];
           
$ip = $_SERVER['REMOTE_ADDR'];
$fichier2 = fopen("log.txt", "a");
$tdate=getdate();
$jour=sprintf("%02.2d",$tdate["mday"])."/".sprintf("%02.2d",$tdate["mon"])."/".$tdate["year"];
$heure=sprintf("%02.2d",$tdate["hours"])."H".sprintf("%02.2d",$tdate["minutes"]);
$d="[".$jour." à ".$heure.$login." S'est connecté"."] ";
fwrite($fichier2," 
".$d.$ip);
fclose($fichier2);
           header('Location: index.php');

           
        }
        else
        {
$ip = $_SERVER['REMOTE_ADDR'];
$fichier2 = fopen("log.txt", "a");
$tdate=getdate();
$jour=sprintf("%02.2d",$tdate["mday"])."/".sprintf("%02.2d",$tdate["mon"])."/".$tdate["year"];
$heure=sprintf("%02.2d",$tdate["hours"])."H".sprintf("%02.2d",$tdate["minutes"]);
$d="[".$jour." à ".$heure." ERROR : utilisateur ou mot de passe incorrect"."] ";
fwrite($fichier2," 
".$d.$ip);
fclose($fichier2);
           header('Location: Connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       
$ip = $_SERVER['REMOTE_ADDR'];
$fichier2 = fopen("log.txt", "a");
$tdate=getdate();
$jour=sprintf("%02.2d",$tdate["mday"])."/".sprintf("%02.2d",$tdate["mon"])."/".$tdate["year"];
$heure=sprintf("%02.2d",$tdate["hours"])."H".sprintf("%02.2d",$tdate["minutes"]);
$d="[".$jour." à ".$heure." ERROR : utilisateur ou mot de passe incorrect"."] ";
fwrite($fichier2," 
".$d.$ip);
fclose($fichier2);
       header('Location: Connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: Membre.php');
}
$count->closeCursor(); // fermer la connexion
?> 