
<h1>ph16e - Annivetrsiares de mariage</h1>
<p>Bienvenue sur "ph16e", l'application des anniversaires de mariage</p>
<?php
    if (isset($_GET['info']) && $_GET['info'] == 1) {
        ?>
         <h3>Le fichier à bien été exporté en .csv a l'emplacement: <?= $_GET['path'] ?></h3>
         <?php
    }
    ?>
<ul>
    <li>Revenir a <a href="./index.php">l'accueil</a></li>
    <li>Liste des <a href="./liste.php">noces</a></li>
    <li>Rechercher des <a href="./search.php">noces</a></li>
    <li>Ajouter des <a href="./add.php">noces</a></li>
    <li>Exporter les noces en <a href="./exports.php">CSV</a></li>

</ul>