<?php
$nombre = 5;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_05</title>
</head>
<body>
    <h1>Avec for</h1>
    <?php
    echo '<ul>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>".$nombre." x ". $i . " = ". $nombre * $i ."</li>";
        }
    echo '</ul>'
    ?>
    
    <h1>Avec while</h1>
    <?php

    $i = 1;

    echo '<ul>';
        while ($i <= 10) {
            echo "<li>".$nombre." x ". $i . " = ". $nombre * $i ."</li>";
            $i++;
        }
    echo '</ul>'
    ?>

    <h1>Avec do ..while</h1>
    <?php

    $i = 1;

    echo '<ul>';
        do {
            echo "<li>".$nombre." x ". $i . " = ". $nombre * $i ."</li>";
            $i++;
        } while ($i <= 10);
    echo '</ul>'
    ?>
</body>
</html>