<?php
/**
 * po23a : page d'accueil
 */
require_once('./init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po23a</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po23c</h1>
  <h2>Page d'accueil</h2>
  <p class="soustitre">Bienvenue sur "po23c", l'application des anniversaires de mariage</p>
  <?php include "menu.php"; ?>

  <?php
    $collection = [];
    $n1 = new Noces(["duree" => 10, "libelle" => "Étain"]);
    array_push($collection, $n1);
    $n2 = new Noces(["duree" => 20, "libelle" => "Porcelaine"]);
    array_push($collection, $n2);
    $n3 = new Noces(["duree" => 30, "libelle" => "Perle"]);
    array_push($collection, $n3);
    $n4 = new Noces(["duree" => 40, "libelle" => "Émeraude"]);
    array_push($collection, $n4);
  ?>
  <h3>Liste des noces</h3>
  <p>Il y a <?= count($collection) ?></p>
  <p>Les secondes noces sont les noces de <?= $collection[1]->get_libelle(); ?></p>
  <table>
    <tr>
        <th>ID</th>
        <th>Durée</th>
        <th>Libellé</th>
    </tr>
    <?php 
    foreach ($collection as $noce) {
        ?>
        <tr>
            <td><?= $noce->get_id() ?></td>
            <td><?= $noce->get_duree() ?></td>
            <td><?= $noce->get_libelle() ?></td>
        </tr>
       <?php
    }
    ?>
    </table>

    <h3>Test de la méthode afficher()</h3>
    <?= $collection[1]->afficher(); ?>

    <h3>Liste des noces avec print_r</h3>

    <pre>
        <?= print_r($collection) ?>
    </pre>

    <pre>
      <?= print_r($collection[1]->dump()) ?>
    </pre>
</body>
</html>