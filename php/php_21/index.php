<?php
require_once('./inc/nuages.inc.php');


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_21</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>ph21b - Les nuages</h1>
    <form action="./nuages.php" method="get">
        <label for="selection">Choississez votre nuage</label>
        <select name="selection" id="selection">
            <?php
                foreach ($familles as $rows=>$row) {
                    ?>
                    <option value="<?= $rows ?>">-<?= $rows ?></option>
                    <?php
                }
            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>