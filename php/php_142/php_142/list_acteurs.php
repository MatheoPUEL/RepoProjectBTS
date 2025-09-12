<?php
require_once('header.inc.php');

    require_once('./functions/db_functions.php');

    $dbh = db_connect();
    $sql = "SELECT * FROM acteur";
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
            <th>Actions</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['prenom'] ; ?></td>
                <td><?= $row['nom'] ; ?></td>
                <td><a href="./edit.php?id=<?=$row['id_acteur']?>">Modifier</a> - <a href="./supp.php?id=<?=$row['id_acteur']?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <p><?=  count($rows) ?> acteur(s)</p> 
</body>
</html>