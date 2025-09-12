<?php
$chaine="l'élève a dépassé le maître";
$le = "le";
$e = "é";
$he = "è";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php12</title>
</head>
<body>
    <p>
        <?= "Nombre de caractère(s) = ".strlen($chaine)."</br>" ?>
        <?= "Position de 'le' = ".strpos($chaine, $le)."</br>" ?>
        <?= "position de 'é' = ".strpos($chaine, needle: $e)."</br>" ?>
        <?= "position de 'è' = ".strpos($chaine, needle: $he)."</br>" ?>
    </p>


</body>
</html>