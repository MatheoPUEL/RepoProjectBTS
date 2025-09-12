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
    <p><a href="./search.php">Rechercher</a> une noce</p>
    <table>
        <tr>
            <th>Durée</th>
            <th>Nom</th>
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
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>