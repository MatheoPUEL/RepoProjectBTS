<?php
$x = 10;
$y = 12;
$boolean = 0; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php19</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        td {
            width: 40px;
            height: 40px;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Damier de <?= $x . "x" . $y ?></h1>
    <table>
        <?php
        for ($i = 1; $i <= $y; $i++) {
            ?>
            <tr>
                <?php
                for ($j = 1; $j <= $x; $j++) {
                    if ($boolean = !$boolean && is_float($j/2)){
                        echo '<td class="black">'.$boolean.'</td>';
                    } else {
                        echo "<td></td>";
                    }
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>