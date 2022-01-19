<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jura</title>
    </head>
 
    <body>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <?php include('Header.php'); ?>
    
    <!-- Le corps -->
    
    <div id="container2">
        <h2>Jura CCVEN</h2>
        
        <p>
        <h3>Réservation</h3><br />
        <form 
            method="POST" >
            <p class="tform"><h3>Informations personnelles</h3></p>
           <label for="nom">Nom
               <input type="text" name="nom" id="nom">
           </label>
        <label for="Prenom">Prenom
            <input type="text" name="prenom" id="prenom">
        </label>
        <label for="mail">Email
            <input type="text" name="mail" id="mail">
        </label>
        <label for="telephone">Téléphone
            <input type="text" name="telephone" id="telephone">
        </label>
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
           </label>
            <label for="Reservation">Logement spéciaux
               <input type="radio" name="Reservation" id="logement_speciaux" value="special">
           </label><br/>
           <p class="tform"><h3>Option supplémentaire</h3></p>
           <label for="optionsupp">Pension complète
               <input type="checkbox" name="optionsupp" id="pension_complete">
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
           if(isset($_post['nom'])){
               $_post['nom'];
           }
           if(isset($_post['prenom'])){
               $_post['prenom'];
           }
           if(isset($_post['mail'])){
               $_post['mail'];
           }
           if(isset($_post['telephone'])){
               $_post['telephone'];
           }
           if(isset($_post['Reservation'])){
               $_post['Reservation'];
           }
           if(isset($_post['optionsupp'])){
               $_post['optionsupp'];
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