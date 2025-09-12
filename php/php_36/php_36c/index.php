<?php
    require_once('./function/db_functions.php');

    $dbh = db_connect();
    $sql = "SELECT * FROM mcu";
    try {
        $fetch = $dbh->prepare($sql);
        $fetch->execute();
        $rows = $fetch->fetchAll();
    } catch (PDOException $ex) {
        die('Raté');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php36</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php require_once('./header.inc.php') ?>
    <table>
        <tr>
            <th>id</th>
            <th>Titre</th>
            <th>Phase</th>
            <th>Poster</th>
            <th>Date Sortie USA</th>
            <th>Réalisateur</th>
            <th>Auteur(s)</th>
            <th>Producteur(s)</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['id'] ; ?></td>
                <td><?= $row['title'] ; ?></td>
                <td><?= $row['phase'] ; ?></td>
                <td><img height="70px" src="./img/<?php if ($row['id'] < 10) {echo "0".$row['id']; } else {echo $row['id']; }?>.jpg" alt="<?php if ($row['id'] < 10) {echo "0".$row['id']; } else {echo $row['id']; }?>.jpg"></td>
                <td><?= $row['us_release_date'] ; ?></td>
                <td><?= $row['directors'] ; ?></td>
                <td><?= $row['screenwriters'] ; ?></td>
                <td><?= $row['producers'] ; ?></td>
                <td><?= $row['status'] ; ?></td>
                <td><a href="./edit.php?id=<?=$row['id']?>">Modifier</a> - <a href="./supp.php?id=<?=$row['id']?>">Supprimer</a></td>

            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>