<?php
require_once('./inc/pizzas.inc.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Ingrédients</th>
        </tr>
        <?php
        foreach($pizzas as $indice=>$name) {
            ?>
            <tr>
                <td><?= $name['nom'] ?></td>
                <td><?= implode(", ", $name['ingredients']) ?></td>
            </tr>
            <?php
        }


        ?>
    </table>
    <p>Il y à <?= $indice + 1 ?> pizza(s)</p>
</body>
</html>