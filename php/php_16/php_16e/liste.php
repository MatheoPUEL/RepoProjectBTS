<?php
require_once('./functions/db_functions.php');
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
    <?php include('./inc/menu.inc.php') ?>
    <table>
        <tr>
            <th>Durée</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        <?php
        $dbh = db_connect();
        $sql = "SELECT * FROM noces";
        try {
            $fetch = $dbh->prepare($sql);
            $fetch->execute();
            $table = $fetch->fetchAll();
            $count = $fetch->rowCount();
        } catch (PDOException $ex) {
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }

        foreach ($table as $row) {
            ?>
            <tr>
                <td><?= $row['duree'] ?></td>
                <td><?= $row['lib_noces'] ?></td>
                <td><a href="./delete.php?id=<?= $row['id_noces'] ?>">Supprimer</a> &nbsp; <a href="./update.php?id=<?= $row['id_noces'] ?>">Modifier</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>