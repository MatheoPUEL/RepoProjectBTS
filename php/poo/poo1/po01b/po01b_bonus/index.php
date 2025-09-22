<?php
include "class/Voiture.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>po01b</title>
    </head>
    <body>
        <?php
        // Voiture 1
        $voiture1 = new Voiture;
        $voiture1->nom = "voiture1";
        $voiture1->marque = "Dacia";
        $voiture1->modele = "Logan";
        $voiture1->compteur = 0;
        $voiture1->demarrer();
        $voiture1->avancer(mt_rand(10,300));
        $voiture1->arreter();
        // Voiture 2
        $voiture2 = new Voiture;
        $voiture2->nom = "voiture2";
        $voiture2->marque = "Renault";
        $voiture2->modele = "Megane";
        $voiture2->compteur = 0;
        $voiture2->demarrer();
        $voiture2->avancer(mt_rand(10,300));
        $voiture2->arreter();
        // Voiture 3
        $voiture3 = new Voiture;
        $voiture3->nom = "voiture3";
        $voiture3->marque = "Renault";
        $voiture3->modele = "Megane";
        $voiture3->compteur = 0;
        $voiture3->demarrer();
        $voiture3->avancer(mt_rand(10,300));
        $voiture3->arreter();
        // Evaluation des distances parcourues
        echo "<p>Distances parcourues</p>";
        echo "<li>Voiture 1 : ".$voiture1->compteur." km</li>";
        echo "<li>Voiture 2 : ".$voiture2->compteur." km</li>";
        echo "<li>Voiture 3 : ".$voiture3->compteur." km</li>";
        if ($voiture1->compteur > $voiture2->compteur) {
            $voiture = $voiture1;
        } else {
            $voiture = $voiture2;
        }
        if ($voiture3->compteur > $voiture->compteur) {
            $voiture = $voiture3;
        } 
        echo "<p>Voiture gagnante : ".$voiture->nom."</p>"

        ?>
    </body>
</html>
