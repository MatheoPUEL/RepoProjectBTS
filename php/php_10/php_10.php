<?php
$nombre = 8;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php10</title>
</head>
<body>
    <h1>php10 : Comptage de personnes</h1>
    <?php 
    echo "<h3> Comptage de ". $nombre . " personnes </h3>";
    for ($i = 1; $i <= $nombre; $i++) {
        ?>
            <img src="./images/php10_homme.png" alt="">
        <?php
    }
    ?>

</body>
</html>