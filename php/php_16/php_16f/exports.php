<pre>

<?php
require_once('./functions/db_functions.php');

$dbh = db_connect();
$sql = "SELECT duree, lib_noces FROM noces";
try {
    $fetch = $dbh->prepare($sql);
    $fetch->execute();
    $tables = $fetch->fetchAll(PDO::FETCH_ASSOC);
    $count = $fetch->rowCount();
} catch (PDOException $ex) {
    die("Erreur lors de la requête SQL : " . $ex->getMessage());
}
$path = "files/noces.csv";
$file = fopen($path, "w") or exit("<p>Impossible d'ouvrir le fichier</p>");
$nb=0;
foreach ($tables as $table) {
    fputcsv($file, $table);
    $nb++;
}
fclose($file);

header("Location: ./index.php?info=1&path=".$path);