<?php
require_once("./inc/etats.inc.php");

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
    <h1>ph22 - états des Etats-Unis</h1>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Drapeau</th>
        </tr>
        <?php
        foreach ($etats as $key => $value) {
            $img = './img/'.str_replace(' ', '_', $value).'.png';
        ?>
        <tr>
            <td><?= $key; ?></td>
            <td><?= $value; ?></td>
            <td><img src="<?=$img?>" alt="<?= $value; ?>"></td>
        </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>