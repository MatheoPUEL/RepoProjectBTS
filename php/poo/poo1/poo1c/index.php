<?php
require_once('./voiture.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $voiture = new Voiture("Voiture 1");
    $voiture->afficher();

    $voiture1 = new Voiture("Voiture 1");
    $voiture1->marque = "Honda";
    $voiture1->modele = "civic";

    $voiture1->aDemarre();
    echo "La voiture a démarré </br>";

    $km =200;
    $voiture1->avancer($km);
    echo "la voiture a avancé de" . $km ." </br>";

    $voiture1->arreter();
    echo "la voiture est arreter </br>";

    echo "le nom c'est: " . $voiture1->nom ."</br>";
    $voiture1->afficher();
    ?>
</body>
</html>