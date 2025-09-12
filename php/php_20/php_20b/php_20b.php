<?php
require_once('./functions/db_functions.php');

$dbh = db_connect();
$sql = "SELECT * FROM pays";
try {
    $fetch = $dbh->prepare($sql);
    $fetch->execute();
    $rows = $fetch->fetchAll();
    $count = $fetch->rowCount();
} catch (PDOException $ex) {
    die('Erreur de la requête'. $ex->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph20b</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>ph20b - pays de l'U.E. avec un BD</h1>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Capitale</th>
            <th>Drapeau</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['code'] ?></td>
                <td><?= $row['nom_fr'] ?></td>
                <td><?= $row['capitale'] ?></td>
                <td><img src="./img/<?= $row['code'] ?>.png" alt="<?= $row['code'] ?>.png"></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <p>Il y à <?= $count ?> pays dans l'ue</p>
</body>
</html>