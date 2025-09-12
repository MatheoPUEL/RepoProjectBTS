<?php
require_once('./functions/db_functions.php');

if (isset($_POST['nomfr']) && isset($_POST['code']) && isset($_POST['dateadhesion']) && isset($_POST['nomlocal']) && isset($_POST['capitale']) && isset($_POST['langues']) && isset($_POST['monnaie'])) {
    $dbh = db_connect();

    $sql = "INSERT INTO pays (nom_fr, date_adhesion, code, nom_local, capitale, langues, monnaie) 
            VALUES (:nomfr, :dateadhesion, :code, :nomlocal, :capitale, :langues, :monnaie)";
    
    $add = $dbh->prepare($sql);
    $add->bindParam(':nomfr', $_POST['nomfr']);
    $add->bindParam(':dateadhesion', $_POST['dateadhesion']);
    $add->bindParam(':code', $_POST['code']);
    $add->bindParam(':nomlocal', $_POST['nomlocal']);
    $add->bindParam(':capitale', $_POST['capitale']);
    $add->bindParam(':langues', $_POST['langues']);
    $add->bindParam(':monnaie', $_POST['monnaie']);

    if ($add->execute()) {
        echo "Pays ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout du pays.";
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
    <form action="./add.php" method="post">
        <label for="nomfr">Nom Français</label><br>
        <input type="text" name="nomfr" id="nomfr" required><br>

        <label for="dateadhesion">Date d'adhésion</label><br>
        <input type="date" name="dateadhesion" id="dateadhesion" required><br>

        <label for="code">Code du pays</label><br>
        <input type="text" name="code" id="code" required><br>

        <label for="nomlocal">Nom Local</label><br>
        <input type="text" name="nomlocal" id="nomlocal" required><br>

        <label for="capitale">Capitale</label><br>
        <input type="text" name="capitale" id="capitale" required><br>

        <label for="langues">Langues parlées</label><br>
        <input type="text" name="langues" id="langues" required><br>

        <label for="monnaie">Monnaie</label><br>
        <input type="text" name="monnaie" id="monnaie" required><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>