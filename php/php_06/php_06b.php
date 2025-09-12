<?php

function parite($nombre) {
    if ($nombre % 2 == 1) {
        echo $nombre . " est impair </br>";
    } else {
        echo $nombre . " est pair </br>";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 06</title>
</head>
<body>
    <h1>php06b : parité d'un nombre avc fonction</h1>

    <p>
        <?php parite(1) ?>
        <?php parite(16) ?>
        <?php parite(23) ?>
        <?php parite(102) ?>
        <?php parite(217) ?>
        <?php parite(99) ?>
    </p>

</body>
</html>