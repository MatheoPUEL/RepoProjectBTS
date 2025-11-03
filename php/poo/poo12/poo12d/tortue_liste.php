<?php

/**
 * po12a : page d'accueil
 */
require_once('./init.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>po12a</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
    <h1>po12a</h1>
    <h2>Page d'accueil</h2>
    <p class="soustitre">Bienvenue sur "po12a", l'application des Tortues Ninja !</p>
    <?php include "menu.php"; ?>


    <h1>Création des tortues</h1>
    <?php
    $tortues = [];

    $t1 = new Tortue();
    $t1->fill(['Nom' => 'Leonardo', 'Surnom' => 'Leo', 'Couleur' => 'bleu']);
    $t1->afficher();
    $tortues[] = $t1;

    $t2 = new Tortue();
    $t2->fill(['Nom' => 'Michelangelo', 'Surnom' => 'Mikey or Mike', 'Couleur' => 'orange']);
    $t2->afficher();
    $tortues[] = $t2;

    $t3 = new Tortue();
    $t3->fill(['Nom' => 'Donatello', 'Surnom' => 'Donnie or Don', 'Couleur' => 'violet']);
    $t3->afficher();
    $tortues[] = $t3;

    $t4 = new Tortue();
    $t4->fill(['Nom' => 'Raphael', 'Surnom' => 'Raph', 'Couleur' => 'rouge']);
    $t4->afficher();
    $tortues[] = $t4;

    ?>

    <h1>Liste des tortues</h1>
    <p>Il y a <?= count($tortues) ?> dans la collection</p>
    <p>La seconde tortue est <?= $tortues[1]->NomComplet(); ?></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Surnom</th>
            <th>Couleur</th>
        </tr>
        <?php
        foreach ($tortues as $tortue) {
        ?>
            <tr>
                <td></td>
                <td><?= $tortue->GetNom() ?></td>
                <td><?= $tortue->GetSurnom() ?></td>
                <td><?= $tortue->GetCouleur() ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <h1>Liste des tortues avec print_r</h1>
    <pre>
        <?= print_r($tortues) ?>
    </pre>
</body>

</html>