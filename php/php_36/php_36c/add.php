<?php
    require_once('./function/db_functions.php');
    if(isset($_POST['title']) && isset($_POST['phase'])){
         $dbh = db_connect();
        $sql = "INSERT INTO `mcu` (`title`, `phase`, `us_release_date`, `directors`, `screenwriters`, `producers`, `status`) VALUES (:title, :phase, :us_release_date, :directors, :screenwriters, :producers, :status)";
        try {
            $fetch = $dbh->prepare($sql);
            $fetch->execute([
                ':title' => $_POST['title'],
                ':phase' => $_POST['phase'],
                ':us_release_date' => $_POST['us_release_date'],
                ':directors' => $_POST['directors'],
                ':screenwriters' => $_POST['screenwriters'],
                ':producers' => $_POST['producers'],
                ':status' => $_POST['status']
            ]);
        } catch (PDOException $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un MCU</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php require_once('./header.inc.php') ?>
    <form action="./add.php" method="post">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" required><br>
        
        <label for="phase">Phase</label>
        <input type="text" id="phase" name="phase" required><br>
        
        <label for="us_release_date">Date de sortie (US)</label>
        <input type="date" id="us_release_date" name="us_release_date"><br>
        
        <label for="directors">Réalisateurs</label>
        <input type="text" id="directors" name="directors"><br>
        
        <label for="screenwriters">Scénaristes</label>
        <input type="text" id="screenwriters" name="screenwriters"><br>
        
        <label for="producers">Producteurs</label>
        <input type="text" id="producers" name="producers"><br>
        
        <label for="status">Statut</label>
        <input type="text" id="status" name="status"><br>
        
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>