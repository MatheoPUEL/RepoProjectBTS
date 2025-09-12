<?php
$planetes = array(
    "Mercure",
    "Vénus",
    "Terre",
    "Mars",
    "Jupiter",
    "Saturne",
    "Uranus",
    "Neptune"
)
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
    <h1>ph42 - Planètes du système solaire</h1>
    <table>
        <tr>
            <th>Planète</th>
        </tr>
        <?php   
        foreach($planetes as $plt) {
            ?>
            <tr>
                <td><?= $plt ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>