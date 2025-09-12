<?php

require_once('./inc/alphabet.inc.php');

$fichier = fopen("./file/otan.txt", 'w') or exit('ouverture du fichier impossible');

foreach($lettres as $cle=>$mot) { 
    fwrite($fichier, $cle. " : ". $mot ."\r");
}
 
fclose($fichier);

header("Location: ./index.php");

exit();