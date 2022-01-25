<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: Connexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Reservation</title>
        <?php include('Header.php'); ?>
        

    </head>
 <div id="container2">
    <body>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

    <!-- Le corps -->
    <form 
    method="POST" >
        <p>
        <h3>Réservation</h3><br />
        
            
        <p class="tform"><h3>Logement à disposition</h3></p>
            <label for="Reservation">Logement lit simple
               <input type="radio" name="Reservation" id="logement_lit_simple" value="simple">
           </label>
            <label for="Reservation">Logement lit double
               <input type="radio" name="Reservation" id="logement_lit_double" value="double">
           </label>
            <label for="Reservation">Logement 3 lits
               <input type="radio" name="Reservation" id="logement_lit_3" value="triple">
           </label>
            <label for="Reservation">Logement 4 lits
               <input type="radio" name="Reservation" id="logement_lit_4" value="Quadruple">
           <p class="tform"><h3>Option supplémentaire</h3></p>
           <label for="optionsupp">Pension complète
               <input type="checkbox" name="optionsupp" id="pension_complete">
           </label>
           <label for="optionspecial">Logement Special
               <input type="checkbox" name="optionspecial" id="logement_special">
           </label>
        <p class="tform"><h3>Date de séjour</h3></p>
           <label for="datedebut">Date de début de séjour
               <input type="date" name="datedebut" id="datedebut" >
           </label>
           <br/>
           <label for="datefin">Date de fin de séjour
               <input type="date" name="datefin" id="datefin" >
           </label><br/>
           <?php
           if(isset($_post['Reservation'])){
               $_post['Reservation'];
           }
           if(isset($_post['optionsupp'])){
               $_post['optionsupp'];
           }
           if(isset($_post['optionspecial'])){
            $_post['optionspecial'];
        }

           if(isset($_post['datedebut'])){
               $_post['datedebut'];
           }
           if(isset($_post['datefin'])){
               $_post['datefin'];
           }
           ?>
           <br/>
           <button>Reserver votre Séjour</button>
    </form>
    </div>

    <!-- Le pied de page -->

    <?php include('Footer.php'); ?>

    </body>
</html> 