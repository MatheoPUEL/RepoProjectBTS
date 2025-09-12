<?php
require_once('cookie.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 3</h1>
    <ul>
        <li><a href="./index.php">Page d'accueil</a></li>
        <li><a href="./page2.php">Page 2</a></li>
        <li><a href="./page3.php">Page 3</a></li>
        <li><a href="./raz.php">raz compteur</a></li>
    </ul>

    <p><?php if(isset($_COOKIE['compteur'])){echo $_COOKIE['compteur'];}else {echo '0';} ?> visite(s)</p>
</body>
</html>