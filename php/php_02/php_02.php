<?php
$chaine = "Bonjour le monde !";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_02</title>
</head>
<body>
    <?php
    echo "<p>".$chaine."</p>";
    echo "<p>".date('Y-m-d H:i:s')."</p>";
    ?>
</body>
</html>