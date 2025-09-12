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
    $sql = "SELECT * FROM planete WHERE id =".htmlspecialchars($_GET['id']);
    try {
        $fetch = $dbh->prepare($sql);
        $fetch->execute();
        $row= $fetch->fetch();
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    ?>

    <img width="250px" src="./img/<?= strtolower($row['nom']) ?>.jpg" alt="">

    <ul>
        <li>Nom: <?= $row['nom'] ?></li>
        <li>Type: <?= $row['type'] ?></li>
        <li>Diamètre: <?= $row['diametre'] ?></li>
        <li>Masse: <?= $row['masse'] ?></li>
        <li>Demi grand axe: <?= $row['demi_grand_axe'] ?></li>
        <li>Période de révolution: <?= $row['periode_revolution'] ?></li>
        <li>Inclinaison: <?= $row['inclinaison'] ?></li>
        <li>Excentricite: <?= $row['excentricite'] ?></li>
        <li>Période de rotation: <?= $row['periode_rotation'] ?></li>
        <li>Satellites: <?= $row['satellites'] ?></li>
        <li>Anneaux: <?= $row['anneaux'] ?></li>
        <li>Atmosphere: <?= $row['atmosphere'] ?></li>
    </ul>
</body>
</html>