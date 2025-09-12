<?php

function hyper($url) {
    echo "<p><a target='_blank' href='http://".$url."' title='Lien vers ". $url ."'>Lien vers ". $url ."</a></p>";
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php13</title>
</head>
<body>
    <h1>Ph13 - Gnéérateur de liens</h1>
    <?php
    hyper("www.google.fr");
    hyper("www.bing.fr");
    hyper("www.qwant.fr");
    ?>
</body>
</html>