<?php
require_once('./inc/europe.inc.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>ph20 - pays de l'U.E.</h1>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Drapeau</th>
        </tr>
        <?php
        foreach($europe as $cle=>$value) {
            
            ?>
            <tr>
                <td><?= $cle ?></td>
                <td><?= $value ?></td>
                <td><img src="./img/<?= $cle ?>.png" alt="<?= $value ?>"></td>
            </tr>
            <?php
        };
        ?>
    </table>
</body>
</html>