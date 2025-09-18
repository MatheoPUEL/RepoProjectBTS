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
    $voiture = new Voiture();
    $voiture->nom = "Voiture";
    $voiture->marque = "Honda";
    $voiture->modele = "civic";

    $voiture->aDemarre();
    echo "La voiture a démarré </br>";

    $km =100;
    $voiture->avancer($km);
    echo "la voiture a avancé de" . $km ." </br>";

    $voiture->arreter();
    echo "la voiture est arreter </br>";

    echo "le nom c'est: " . $voiture->nom ."</br>";


    $voiture->ADemarre();
    $voiture->avancer(100);
    $voiture->arreter();
    $voiture->afficher();
    ?>
</body>
</html>