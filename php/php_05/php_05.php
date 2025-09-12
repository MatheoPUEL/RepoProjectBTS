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
    
    <?php
    echo '<ul>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>".$nombre." x ". $i . " = ". $nombre * $i ."</li>";
        }
    echo '</ul>'
    ?>
</body>
</html>