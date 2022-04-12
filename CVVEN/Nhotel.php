<?php

include('BaseD.php');
        //Gestion des chambres
class Nhotel # Déclaration de la classe
{
    public $bdd;
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=jeu;charset=utf8', 'root', 'root');
    }
        public function Nhotel($id,$nom,$lit, $descript,$special) {
        $this->bdd->exec("INSERT INTO chambre(id,nom,lit,descript,special) VALUES('$id','$nom','$lit','$descript','$special')");
        }
        public function lire()
    {
        $chambre = $this->bdd->query('SELECT * from chambre');
        return $chambre->fetchAll(\PDO::FETCH_ASSOC); #transformation en liste
        
    }
}
$ichambre = new Nhotel();
$chambre = $ichambre->lire();*

?>