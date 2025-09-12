<?php
require_once('./inc/poly.inc.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_07</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>php07b : classement d'un polygone en tableau</h1>
        <form method="post" action="php_07b.php">
            <input type="text" name="value">
            <input type="submit" value="Valider">
        </form>

        <?php
        if (isset($_POST['value'])) {
            if(isset($poly[$_POST['value']])) {
                echo '<p>Le polygone à '.$_POST['value']. ' côté(s) est un ' .$poly[$_POST['value']].'</p>';
            } else {
                echo "<p>Le polygone recherché n'existe pas...</p>";
            }
        }    
        ?>
</body>
</html>






















































                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <br>