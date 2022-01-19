<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jura</title>
    </head>
 
    <body>
 
    <?php include('Header.php'); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h2>Jura CCVEN</h2>
        
        <p>
            Réservation<br />
        <form 
            method="POST" >
        <p class="tform">Informations Personnelles</p>
           <label for="nom">nom
               <input type="text" name="nom" id="nom">
           </label>
        <label for="Prenom">Prenom
            <input type="text" name="prenom" id="prenom">
        </label>
        <p class="tform">Logement à disposition</p>
            <label for="Reservation">logement lit simple
               <input type="radio" name="Reservation" id="logement_lit_simple" value="simple">
           </label>
            <label for="Reservation">logement lit double
               <input type="radio" name="Reservation" id="logement_lit_double" value="double">
           </label>
            <label for="Reservation">logement 3 lits
               <input type="radio" name="Reservation" id="logement_lit_3" value="triple">
           </label>
            <label for="Reservation">logement 4 lits
               <input type="radio" name="Reservation" id="logement_lit_4" value="Quadruple">
           </label>
            <label for="Reservation">logement spéciaux
               <input type="radio" name="Reservation" id="logement_speciaux" value="special">
           </label><br/>
           <p class="tform"><h1>option supplémentaire</h1></p>
           <label for="optionsupp">Pension Complète
               <input type="checkbox" name="optionsupp" id="pension_complete">
           </label>
           <p class="tform">date de séjour</p>
           <label for="datedebut">date de début de séjour
               <input type="date" name="datedebut" id="datedebut" >
           </label>
           <br/>
           <label for="datefin">date de fin de séjour
               <input type="date" name="datefin" id="datefin" >
           </label><br/>
           <?php
           if(isset($_post['nom'])){
               $_post['nom'];
           }
           if(isset($_post['prenom'])){
               $_post['prenom'];
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