<?php
require_once('./inc/fastfood.inc.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php9</title>
    <link rel="stylesheet" href="./style.css">
</head>
    <h1>php9 : Liste des fast foods </h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Logo</th>
        </tr>
        <?php
        foreach ($fastfoods as $indice=>$name) {
            ?>
            <tr>
                <td><?= $name ?></td>
                <td><img width="50px" src="./img/<?= $logos[$indice] ?>" alt="<?= $name ?>"></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>