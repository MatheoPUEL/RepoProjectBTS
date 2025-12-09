<?php
session_start();
date_default_timezone_set('Europe/Paris');
require_once('../bdd/bdd_co.php');

if ($_SESSION["usertype"] > 1) {
    if (isset($_POST['message_edit'])){$message = $_POST['message_edit'];}

    $dbh = db_connect();
    $sql = "UPDATE faq SET question = :question, date_mod = :date_mod, is_mod = 1 WHERE id_faq = :id";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(['question' => $message, 'date_mod' => date("Y-m-d H:i:s"), "id" => $_GET['id']]);
        header("location: ../admin_all_ligues.php");
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
}
