<?php 
$temp = -8;

if ($temp >= 100) {
    $etat = "gazeaux";
} elseif ($temp >= 0) {
    $etat = "liquide";
} else {
    $etat = "solide";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php08</title>
</head>
<body>
    <h1>php08 : état de l'eau</h1>
    <?= "A ". $temp . "°C, l'état de l'eau est ". $etat ?>
</body>
</html>