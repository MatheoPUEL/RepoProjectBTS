<?php
include_once('./inc/mcu.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>ph36 - Marvel Cinematic Universe</h1>
    <img src="./img/mcu_logo.png" alt="">
    <p>Source : <a target="_blank" href="https://fr.wikipedia.org/wiki/Univers_cin%C3%A9matographique_Marvel">Marvel Cinematic Universe</a> sur Wikipédia</p>

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
        foreach($mcu as $list=>$film) {
            ?>
            <tr>
                <td><?= $film['id'] ; ?></td>
                <td><?= $film['title'] ; ?></td>
                <td><?= $film['phase'] ; ?></td>
                <td><img height="70px" src="./img/<?php if ($film['id'] < 10) {echo "0".$film['id']; } else {echo $film['id']; }?>.jpg" alt="<?php if ($film['id'] < 10) {echo "0".$film['id']; } else {echo $film['id']; }?>.jpg"></td>
                <td><?= $film['us_release_date'] ; ?></td>
                <td><?= $film['directors'] ; ?></td>
                <td><?= $film['screenwriters'] ; ?></td>
                <td><?= $film['producers'] ; ?></td>
                <td><?= $film['status'] ; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>