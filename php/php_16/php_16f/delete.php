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

if(isset($_GET['id'])) {
    $dbh = db_connect();
    $sql = "DELETE FROM noces WHERE id_noces = :idnoces";
    $add = $dbh->prepare($sql);
    $add->bindParam(':idnoces', $_GET['id']);
    $add->execute();
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
    <form action="./add.php" method="post">
        <label for="duree">Durée</label><br>
        <input disabled type="number" name="duree" id="duree" placeholder="<?php if ( isset($row['duree'])) { echo $row['duree'];} ?>"><br>
        <label for="lib">Libellé</label><br>
        <input disabled type="text" name="lib" id="lib" placeholder="<?php if ( isset($row['lib_noces'])) { echo $row['lib_noces'];} ?>"><br>
        <button>Valider la suppression</button>
    </form>
</body>
</html>