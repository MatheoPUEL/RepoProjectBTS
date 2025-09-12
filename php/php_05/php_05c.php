<?php
    function table($nombre) {
        echo "<h3> Table de ".$nombre."</h3>";
        echo '<ul>';
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>".$nombre." x ". $i . " = ". $nombre * $i ."</li>";
            }
        echo '</ul>';
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 05c</title>
</head>
<body>
    <h1>ph05c : table de multiplication avec une fonction</h1>
    <?php 
        table(5);
        table(9)
    ?>
</body>
</html>