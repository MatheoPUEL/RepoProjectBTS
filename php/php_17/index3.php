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
    <h1>ph17 - page 3</h1>

    <table>
        <tr>
            <th>NR</th>
            <th>Jours</th>
            <th>Occitant</th>

        </tr>
        <tr>
            <?php
            foreach($weeks as $indice => $days) {
                ?>
                <tr>
                    <td><?= $indice ?></td>
                    <td><?= $days['francais'] ?></td>
                    <td><?= $days['occitant'] ?></td>

                </tr>
                <?php
            }
            ?>
        </tr>
    </table>
    <p>Il y a <?= count($weeks) ?> jours</p>
    <a href="./index.php">Index</a><br>
    <a href="./index2.php">Page 2</a>

</body>
</html>