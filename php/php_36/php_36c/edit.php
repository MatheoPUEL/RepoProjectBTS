<?php
require_once('./function/db_functions.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbh = db_connect();
    
    $sql = "SELECT * FROM `mcu` WHERE `id` = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':id' => $id]);
    $film = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$film) {
        die('Film non trouvé.');
    }
} else {
    die('ID non spécifié.');
}

if (isset($_POST['title'])) {
    $sql = "UPDATE `mcu` SET `title` = :title, `phase` = :phase, `us_release_date` = :us_release_date, `directors` = :directors, `screenwriters` = :screenwriters, `producers` = :producers, `status` = :status WHERE `id` = :id";

    try {
        $stmt = $dbh->prepare($sql);
        $stmt->execute([
            ':title' => $_POST['title'],
            ':phase' => $_POST['phase'],
            ':us_release_date' => $_POST['us_release_date'],
            ':directors' => $_POST['directors'],
            ':screenwriters' => $_POST['screenwriters'],
            ':producers' => $_POST['producers'],
            ':status' => $_POST['status'],
            ':id' => $id
        ]);

        header('Location: ./index.php');
        exit();
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
    <title>Modifier le Film</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php require_once('./header.inc.php'); ?>
    <form action="./edit.php?id=<?=$id?>" method="post">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?=htmlspecialchars($film['title'])?>" required><br>

        <label for="phase">Phase</label>
        <input type="text" id="phase" name="phase" value="<?=htmlspecialchars($film['phase'])?>" required><br>

        <label for="us_release_date">Date de sortie (US)</label>
        <input type="date" id="us_release_date" name="us_release_date" value="<?=htmlspecialchars($film['us_release_date'])?>"><br>

        <label for="directors">Réalisateurs</label>
        <input type="text" id="directors" name="directors" value="<?=htmlspecialchars($film['directors'])?>"><br>

        <label for="screenwriters">Scénaristes</label>
        <input type="text" id="screenwriters" name="screenwriters" value="<?=htmlspecialchars($film['screenwriters'])?>"><br>

        <label for="producers">Producteurs</label>
        <input type="text" id="producers" name="producers" value="<?=htmlspecialchars($film['producers'])?>"><br>

        <label for="status">Statut</label>
        <input type="text" id="status" name="status" value="<?=htmlspecialchars($film['status'])?>"><br>

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>