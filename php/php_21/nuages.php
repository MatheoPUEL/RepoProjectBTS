<?php
require_once('./inc/nuages.inc.php');
$select = htmlspecialchars($_GET["selection"]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php21 - nuages</title>
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>
    <h1>Le <?= $select ?> </h1>
    <p>Famille: <?= $familles[$select] ?> (<?= $lib_familles[$familles[$select]] ?>)</p>
    <img width="350px" src="./img/<?=$select?>.jpg" alt="<?=$select?>">
    <p>Description: </p>
    <p><?=$descriptions[$select]?></p>
    <p>Retourner à la <a href="./index.php">page d'accueil</a></p>
</body>
</html>