<?php

require_once('./ini.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<!-- fdsqfdsqfdsqfdsqfs -->
    <?php

    /* fdsqjkfdsq */
    $compte1 = new CompteDepot("Bill Gates",500,true,true);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->afficher();
    // Compte d'épargne
    $compte2 = new CompteEpargne("Donald Trump",2000,0.1);
    $compte2->afficher();
    $compte2->calculer_interet(); // + 200€
    $compte2->afficher();
    // Destruction
    $compte1 = NULL;
    $compte2 = NULL;
    ?>
</body>
</html>