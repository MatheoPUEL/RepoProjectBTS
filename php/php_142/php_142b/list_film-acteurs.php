<?php
require_once('header.inc.php');

    require_once('./functions/db_functions.php');

    $dbh = db_connect();
    $sql = "SELECT a.prenom, a.nom, f.titre, fa.id_film_acteur FROM film_acteur fa 
    JOIN acteur a ON fa.id_acteur = a.id_acteur 
    JOIN film f ON fa.id_film = f.id_film ORDER BY f.annee ASC";
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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach($rows as $row) {
            ?>
            <tr>
                <td><?= $row['titre'] ; ?></td>
                <td><?= $row['nom'] ; ?></td>
                <td><?= $row['prenom'] ; ?></td>
                <td><a href="./edit.php?id=<?=$row['id_film_acteur']?>">Modifier</a> - <a href="./supp.php?id=<?=$row['id_film_acteur']?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </table> 
    <p><?= count($rows) ?> Relation(s)</p>
    <p><a href="">Ajouter une relation</a></p>
</body>
</html>