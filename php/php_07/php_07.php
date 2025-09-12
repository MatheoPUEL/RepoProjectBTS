<?php
$cote = 99;
$cotem = $cote - 1;
require_once("./inc/poly.inc.php");

if (isset($poly[$cotem][1])) {
    $polygone = $poly[$cotem][1];
} else {
    $polygone = "Introuvable";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_07</title>
</head>
<body>
    <h1>php07 : classement d'un polygone</h1>

    <p>Le polygone a <?= $cote ?> cotés s'appelle <?= $polygone ?>.</p>
</body>
</html>