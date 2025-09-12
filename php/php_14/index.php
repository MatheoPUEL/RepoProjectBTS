<?php
function listeAPuce($array) {
    ?>
    <ul>
        <?php
        foreach ($array as $day) {
            ?> 
                <li><?= $day ?></li>
            <?php
        }   
        ?>
    </ul>
    <?php
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$tableau=array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");
listeAPuce($tableau);

?>
</body>
</html>