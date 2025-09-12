<?php
require_once('./functions/db_functions.php');
if(isset($_POST['duree']) && isset($_POST['lib'])) {
    $dbh = db_connect();
    $sql = "INSERT INTO noces (duree, lib_noces) VALUES (:duree, :lib)";
    $add = $dbh->prepare($sql);
    $add->bindParam(':duree', $_POST['duree']);
    $add->bindParam(':lib', $_POST['lib']);
    $add->execute();
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
    <form action="./add.php" method="post">
        <label for="duree">Durée</label><br>
        <input type="number" name="duree" id="duree"><br>
        <label for="lib">Libellé</label><br>
        <input type="text" name="lib" id="lib"><br>
        <button>Ajouter</button>
    </form>
</body>
</html>