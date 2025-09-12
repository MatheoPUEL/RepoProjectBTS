<?php
require_once('./functions/db_functions.php');

if(isset($_POST['noce']) && $_POST['noce'] != "") {
    $dbh = db_connect();
    $sql = "SELECT * FROM noces WHERE duree = :duree";

    $fetch = $dbh->prepare($sql);
    $fetch->execute([":duree"=>$_POST['noce']]);
    $row = $fetch->fetch();

    if($row == false) {
        $row = "Les noces n'existe pas...";
    } else {
        $row = $_POST['noce']."année(s) de mariage correspondent aux noces de".$row['lib_noces'];
    }
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
    <h1>ph16d - noces avec BD</h1>
    <h3>Recherche d'un polygones</h3>
    <p>Revenir à l'<a href="./php_16d.php">accueil</a></p>
    <form action="./search.php" method="post">
        <label for="noce">Rechercher</label>
        <input id="noce" type="text" name="noce">
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if(isset($row['lib_noces'])) {
        ?>
            <p><?= $row ?></p>
        <?php
    }
    ?>
</body>
</html>