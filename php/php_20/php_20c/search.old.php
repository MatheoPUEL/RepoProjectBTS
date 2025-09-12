<?php
require_once('./functions/db_functions.php');
$rows = array();
if (isset($_POST['nom']) && $_POST['nom'] != "") {
    $dbh = db_connect();
    $sql = "SELECT * FROM pays WHERE nom_fr like :nom";
    $fetch = $dbh->prepare($sql);
    $fetch->execute([":nom" => "%".$_POST['nom']."%"]);
    $rows = $fetch->fetchAll();
}
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
    <form action="./search.old.php" method="post">
        <label for="nom">Rechercher</label>
        <input id="nom" type="text" name="nom">
        <button type="submit">Envoyer</button>
    </form>
    <table>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Capitale</th>
                    <th>Drapeau</th>
                    <th>Actions</th>
                </tr>
    <?php
    if (count($rows) != 0) {
        foreach ($rows as $row) {
            ?>

                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['nom_fr'] ?></td>
                    <td><?= $row['capitale'] ?></td>
                    <td><img src="./img/<?= $row['code'] ?>.png" alt="<?= $row['code'] ?>.png"></td>
                    <td><a href="./delete.php?id=<?= $row['id_pays'] ?>">Supprimer</a> &nbsp; <a href="./update.php?id=<?= $row['id_pays'] ?>">Modifier</a></td>
    
                </tr>
            
            <?php
        }
        ?>
        </table>
        <?php
    } else {
        echo "Pas de résultats...";
    }
    ?>
</body>
</html>