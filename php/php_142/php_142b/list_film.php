<?php
require_once('header.inc.php');

    require_once('./functions/db_functions.php');

    $dbh = db_connect();
    $sql = "SELECT * FROM film";
    try {
        $fetch = $dbh->prepare($sql);
        $fetch->execute();
        $rows = $fetch->fetchAll();
    } catch (PDOException $ex) {
        die('Raté');
    }

?>
    <table>
        <tr>
            <th>Titre</th>
            <th>Réalisateur</th>
            <th>Année</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['titre'] ; ?></td>
                <td><?= $row['realisateur'] ; ?></td>
                <td><?= $row['annee'] ; ?></td>
                <td><a href="./edit_film.php?id=<?=$row['id_film']?>">Modifier</a> - <a href="./supp_film.php?id=<?=$row['id_film']?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </table> 
</body>
</html>