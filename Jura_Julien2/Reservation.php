<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: Connexion.php');
    exit();
}
if (empty($_POST['id'])) {
    header('Location: index.php');
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
    <body>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <?php 
        include('Ichambre.php');
            echo $_POST['id'];
        ?>
        <div id="container2">
            
    <form    method="POST" >
        <p>
        <h3>Réservation</h3><br />
        <?php
        echo "<h3>Logement à disposition</h3>";
            if($_POST['lit']==1){ ?>
                <input type="hidden" name="Reservation" value="simple"><?php
                echo "<p>Logement lit simple</p>";
            }elseif($_POST['lit']==2){?>
                <input type="hidden" name="Reservation" value="double"><?php
                echo "<p>Logement lit double</p>";
            }elseif($_POST['lit']==3){?>
                <input type="hidden" name="Reservation" value="triple"><?php
                echo "<p>Logement pour 3</p>";
            }elseif($_POST['lit']==4){?>
                <input type="hidden" name="Reservation" value="quadruple"><?php
                echo "<p>Logement pour 4</p>";
            }
        ?>
           <p class="tform"><h3>Option supplémentaire</h3></p>
           <label for="optionsupp">Pension complète
               <input type="checkbox" name="optionsupp" id="pension_complete">
           </label>
           <?php
           if($_POST['special']==1){ ?>
                <input type="hidden" name="Optionspecial" value="Special"><?php
                echo "<p>Ce logement est amenagé pour les personnes en situation de handicape</p>";
            }?>
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

    <?php include('Footer.php'); ?>

    </body>
</html> 
