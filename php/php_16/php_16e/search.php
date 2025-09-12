<?php
require_once('./functions/db_functions.php');

if (isset($_POST['noce']) && $_POST['noce'] != "") {
    $dbh = db_connect();
    $sql = "SELECT * FROM noces WHERE duree = :duree";
    $fetch = $dbh->prepare($sql);
    $fetch->execute([":duree" => $_POST['noce']]);
    $row = $fetch->fetch();

    if ($row === false) {
        $message = "Les noces n'existent pas..."; // Utiliser une variable séparée pour le message d'erreur
    } else {
        $message = $_POST['noce'] . " année(s) de mariage correspondent aux noces de " . $row['lib_noces'];
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
    <?php include('./inc/menu.inc.php') ?>
    <form action="./search.php" method="post">
        <label for="noce">Rechercher</label>
        <input id="noce" type="text" name="noce">
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if (isset($message)) {
        echo "<p>" . $message . "</p>";
    }
    ?>
</body>
</html>