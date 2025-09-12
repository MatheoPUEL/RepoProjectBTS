<?php
require_once('./functions/db_functions.php');

if (isset($_GET['id'])) {
    $dbh = db_connect();
    $sql = "SELECT * FROM noces WHERE id_noces = :id";
    $fetch = $dbh->prepare($sql);
    $fetch->execute([":id" => $_GET['id']]);
    $row = $fetch->fetch();
    print_r($row);
}

if(isset($_POST['duree']) && isset($_POST['lib'])) {
    echo $_GET['id'];
    $dbh = db_connect();
    $sql = "UPDATE noces SET duree = :duree, lib_noces = :lib WHERE id_noces = :idnoces";
    $edit = $dbh->prepare($sql);
    $edit->bindParam(':idnoces', $_GET['id']);
    $edit->bindParam(':duree', $_POST['duree']);
    $edit->bindParam(':lib', $_POST['lib']);
    $edit->execute();
    header('Location: ./liste.php');
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
    <form action="./update.php?id=<?= $_GET['id'] ?>" method="post">
        <label for="duree">Durée</label><br>
        <input type="numbers" name="duree" id="duree" value="<?php if ( isset($row['duree'])) { echo $row['duree'];} ?>"><br>
        <label for="lib">Libellé</label><br>
        <input type="text" name="lib" id="lib" value="<?php if ( isset($row['lib_noces'])) { echo $row['lib_noces'];} ?>"><br>
        <button>Valider l'edition</button>
    </form>
</body>
</html>