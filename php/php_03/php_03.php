<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_03</title>
    <style>
        @charset "utf-8";
        /* main.css */

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: 50px;
        }

        /* -- visualisation des bordures de tableau -- */

        table, th, td {
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-collapse: collapse;
        }

        /* -- espacement et alignement dans les cellules -- */

        th, td {
            padding: 5px;
            text-align: center;
        }

        /* -- Entête en inverse grisé -- */

        th {
            background-color: darkgrey;
            color: white;
        }
    </style>
</head>
<body>

    <?php
    echo "<table>";
        for ($i = 1;$i <= 10; $i++) {
            ?>
            <tr> <td><?= $i ?></td> </tr>
            <?php
        }
    echo "</table>";
    ?>
</body>
</html>