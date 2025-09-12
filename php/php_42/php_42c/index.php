<?php
require_once('./functions/functions.php')
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php42c</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Liste des planètes</h1>
    <ul>
        <li><a href="./index.php">Accueil</a></li>
        <li>Liste des planètes dont le <a href="./page2.php">diamètre</a> est supérieur à celui de la terre</li>
        <li>Liste des planètes par <a href="./page3.php">type</a></li>
    </ul>
    <p>Source : Planètes du <a target="_blank" href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_solaire">système solaire </a>sur Wikipédia</p>
    <?php
    $dbh = db_connect();
    $sql = "SELECT * FROM planete";
    try {
        $fetch = $dbh->prepare($sql);
        $fetch->execute();
        $rows= $fetch->fetchAll();
        $count = $fetch->rowCount();
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Diamètre (Par rapport à la terre)</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><a href="./details.php?id=<?=$row['id']?>"><?= $row['nom'] ?></a></td>
                <td><?= $row['diametre'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <p>Il y à <?= $count ?> planète(s) </p>

</body>
</html>