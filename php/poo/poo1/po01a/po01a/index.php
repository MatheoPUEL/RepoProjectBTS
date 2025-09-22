<?php
include "class/Voiture.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>po01</title>
    </head>
    <body>
        <?php
        $voiture1 = new Voiture;
        $voiture1->nom = "voiture1";
        $voiture1->marque = "Dacia";
        $voiture1->modele = "Logan";
        $voiture1->compteur = 0;
        $voiture1->demarrer();
        $voiture1->avancer(100);
        $voiture1->arreter();
        echo "<p>Le nom est " .$voiture1->nom."</p>";
        $voiture1->afficher();
        
        
        
        ?>
    </body>
</html>
