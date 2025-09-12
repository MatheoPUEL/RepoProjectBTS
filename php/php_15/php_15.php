<?php
$x = 900;
$y = 900;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php15</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>PHP 15 : tableau non-numéroté</h1>
    <p><?= $x ?> ligne(s)</p>
    <p><?= $y ?> colonne(s)</p>
    <table>
        <?php
            for ($i = 1; $i <= $x; $i++){
                ?>
                <tr>
                <?php    
                    for ($j = 1; $j <= $y; $j++){
                        ?>
                        <td>&nbsp;</td>
                        <?php
                    }
                ?>
                </tr>
                <?php
            }
        ?>
    </table>
    <a href="./php_15b.php">Version numérotée</a>
</body>
</html>