<?php
require_once('./functions/db_functions.php');

if(isset($_POST['poly']) && $_POST['poly'] != "") {
    $dbh = db_connect();
    $sql = "SELECT * FROM polygone WHERE id_polygone = ".$_POST['poly'];

    $fetch = $dbh->prepare($sql);
    $fetch->execute();
    $row = $fetch->fetch();
    if($row == false) {
        $row = "Le polygone n'existe pas...";
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
    <h1>ph07d - polygones avec une BD</h1>
    <h3>Recherche d'un polygones</h3>
    <p>Revenir à l'<a href="./php_07c.php">accueil</a></p>
    <form action="./search.php" method="post">
        <label for="poly">Rechercher</label>
        <input id="poly" type="text" name="poly">
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if(isset($row['nom'])) {
        ?>
            <p>Un polygone à <?= $_POST['poly'] ?> Coté(s) est un <?= $row['nom'] ?></p>
        <?php
    }
    ?>
</body>
</html>