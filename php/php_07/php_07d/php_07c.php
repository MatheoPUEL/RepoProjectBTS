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
    <h1>ph07d - polygones avec une BD</h1>
    <h3>Liste des polygones</h3>
    <p><a href="./search.php">Rechercher</a> un polygone</p>
    <table>
        <tr>
            <th>nb coté(s)</th>
            <th>Polygones</th>
        </tr>
        <?php
        $dbh = db_connect();
        $sql = "SELECT * FROM polygone";
        try {
            $fetch = $dbh->prepare($sql);
            $fetch->execute();
            $table = $fetch->fetchAll();
            $count = $fetch->rowCount();
        } catch (PDOException $ex) {
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }

        foreach ($table as $rows=>$row) {
            ?>
            <tr>
                <td><?= $row['id_polygone'] ?></td>
                <td><?= $row['nom'] ?></td>
            </tr>
            <?php
        }
        ?>
        <p>Il y à <?= $count ?> polygone dans cette base de donnée</p>
    </table>
</body>
</html>