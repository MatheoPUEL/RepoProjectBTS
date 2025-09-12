<?php
// Variables
$x = 4;
$y = 8;

//Code
$y = $y -1;
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
    <h1>PHP 15 : tableau numéroté</h1>
    <p><?= $x ?> ligne(s)</p> 
    <p><?= $y + 1 ?> colonne(s)</p>
    <table>
        <?php
            for ($i = 1; $i <= $x; $i++){
                ?>
                <tr>
                <?php    
                    for ($j = 1; $j <= $y; $j++){
                        if($j <= 1) {
                            ?>
                            <td><?= $i ?></td>
                            <?php
                        }

                        if ($i <= 1) {
                            ?>
                            <td><?= $j + 1 ?></td>
                            <?php
                        } else {
                            ?>
                            <td>&nbsp;</td>
                            <?php
                        }


                    }
                ?>
                </tr>
                <?php
            }
        ?>
    </table>
    <a href="./php_15.php">Version numérotée</a>
</body>
</html>