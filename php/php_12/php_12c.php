<?php
$chaine1="C'est l'hôpital qui se fout de la charité";

$count = strlen($chaine1);

$chaine1 = trim($chaine1);

$chaine2 = str_replace(' ', '_', $chaine1);

$chaine2 = strtolower($chaine2);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ph12c - snake case</h1>
    <p>chaine 1 = <?= $chaine1 ?></p>
    <p>nombre de caractère(s) = <?= $count ?></p>
    <p>chaine 2 = <?= $chaine2 ?></p>
</body>
</html>