<?php
$chaine = "le plus grand chapiteau du monde";

function camel($str) {
    $str = lcfirst(str_replace(' ', '', ucwords($str)));
    return $str;
}

function snake($str) {
    $str = trim($str);
    $str = preg_replace('/[\s-]+/', '_', $str);
    $str = strtolower($str);
    return $str;
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ph12d - camel case</h1>
    <p>Chaine 1 = <?= $chaine ?></p>
    <p>Nombre de caractère(s) = <?= strlen($chaine) ?></p>
    <p>Chaine2 (Snake) = <?= snake($chaine) ?></p>
    <p>Chaine2 (camel) = <?= camel($chaine) ?></p>

</body>
</html>