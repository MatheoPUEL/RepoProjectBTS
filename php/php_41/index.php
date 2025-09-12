<?php
require_once('./inc/alphabet.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php41b</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>php 41b - Alphabet phonétique OTAN</h1>
    <?php
    if (!file_exists("./file/otan.txt")) {
        ?>
            <a href="./fichier.php">Générer le fichier</a>
        <?php
    } else {
        ?>
            <p>Le fichier a bien été créé !</p>
        <?php
    }
    ?>
    <h3>Liste des lettres dans un tableau</h3>
    <table>
        <tr>
            <th>Lettre</th>
            <th>Mot</th>
        </tr>

        <?php
        foreach($lettres as $lettre) {
            ?>
            <tr>
                <td><?= $lettre[0] ?></td>
                <td><?= $lettre ?></td>
            </tr>
            <?php
        }    
        ?>

    </table>
<ul>
<?php
        foreach($lettres as $lettre) {
            ?>
            <li><?= $lettre[0] ?> - <?= $lettre ?></li>
            <?php
        }    
        ?>
</ul>

</body>
</html>