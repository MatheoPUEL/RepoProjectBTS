<?php
require_once('./function/db_functions.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dbh = db_connect();
    $sql = "DELETE FROM `mcu` WHERE `id` = :id";
    
    try {
        $stmt = $dbh->prepare($sql);
        $stmt->execute([':id' => $id]);
        
        header('Location: ./index.php'); 
        exit();
    } catch (PDOException $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
} else {
    die('ID non spécifié.');
}
?>