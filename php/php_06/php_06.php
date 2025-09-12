<?php
$nombre = 21;

$reste = $nombre % 2;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 06</title>
</head>
<body>
    <h1>php06 : parité d'un nombre</h1>

    <p>
    <?php
    if ($reste = 0) {
        echo $nombre . " est pair";
    } else {
        echo $nombre . " est impair";
    }
    ?> 
    </p>

</body>
</html>