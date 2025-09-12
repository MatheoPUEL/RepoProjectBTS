<?php
    require_once('./function/db_functions.php');

    $dbh = db_connect();
    $sql = "SELECT * FROM mcu";
    try {
        $fetch = $dbh->prepare($sql);
        $fetch->execute();
        $rows = $fetch->fetchAll();
    } catch (PDOException $ex) {
        die('vjfkm');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php36</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>ph36b - MCU avec une BD</h1>
    <img src="./img/mcu_logo.png" alt="">
    <p>Source: <a target="_blank" href="https://fr.wikipedia.org/wiki/Univers_cin%C3%A9matographique_Marvel">Marvel Cinematic Universe</a> sur Wikipedia</p>
    <table>
        <tr>
            <th>id</th>
            <th>Titre</th>
            <th>Phase</th>
            <th>Poster</th>
            <th>Date Sortie USA</th>
            <th>Réalisateur</th>
            <th>Auteur(s)</th>
            <th>Producteur(s)</th>
            <th>Statut</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['id'] ; ?></td>
                <td><?= $row['title'] ; ?></td>
                <td><?= $row['phase'] ; ?></td>
                <td><img height="70px" src="./img/<?php if ($row['id'] < 10) {echo "0".$row['id']; } else {echo $row['id']; }?>.jpg" alt="<?php if ($row['id'] < 10) {echo "0".$row['id']; } else {echo $row['id']; }?>.jpg"></td>
                <td><?= $row['us_release_date'] ; ?></td>
                <td><?= $row['directors'] ; ?></td>
                <td><?= $row['screenwriters'] ; ?></td>
                <td><?= $row['producers'] ; ?></td>
                <td><?= $row['status'] ; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>