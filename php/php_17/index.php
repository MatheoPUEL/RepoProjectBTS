<?php
require_once('./inc/week.inc.php')
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
    <h1>ph17 - Jours de la semaine</h1>

    <table>
        <tr>
            <th>Jours</th>
        </tr>
        <tr>
            <?php
            foreach($weeks as $indice => $days) {
                ?>
                <tr>
                    <td><?= $days['francais'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tr>
    </table>
    <p>Il y a <?= count($weeks) ?> jours</p>
    <a href="./index2.php">Page 2</a>
</body>
</html>