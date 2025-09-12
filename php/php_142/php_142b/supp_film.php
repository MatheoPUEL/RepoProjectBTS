<?php
require_once('header.inc.php');
require_once('./functions/db_functions.php');

// Vérification si l'ID du film est passé dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_film = $_GET['id'];

    // Connexion à la base de données
    $dbh = db_connect();

    // Récupération des informations du film
    $sql = "SELECT * FROM film WHERE id_film = :id_film";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id_film', $id_film, PDO::PARAM_INT);
    $stmt->execute();
    $film = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification si le film existe
    if (!$film) {
        die("Film non trouvé !");
    }

    // Si le formulaire de confirmation est soumis, on supprime le film
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm_delete']) && $_POST['confirm_delete'] == 'yes') {
        $sql_delete = "DELETE FROM film WHERE id_film = :id_film";
        $stmt_delete = $dbh->prepare($sql_delete);
        $stmt_delete->bindParam(':id_film', $id_film, PDO::PARAM_INT);
        $stmt_delete->execute();

        // Message de confirmation
        echo "<p>Film supprimé avec succès !</p>";
        echo "<p><a href='list_film.php'>Retour à la liste des films</a></p>";
        exit;
    }

} else {
    die("ID du film manquant ou invalide.");
}
?>

<h2>Confirmation de suppression</h2>
<table>
    <tr>
        <th>Titre</th>
        <td><?= htmlspecialchars($film['titre']); ?></td>
    </tr>
    <tr>
        <th>Réalisateur</th>
        <td><?= htmlspecialchars($film['realisateur']); ?></td>
    </tr>
    <tr>
        <th>Année</th>
        <td><?= htmlspecialchars($film['annee']); ?></td>
    </tr>
</table>

<form action="supp_film.php?id=<?= $id_film ?>" method="POST">
    <p>
        <button type="submit" name="confirm_delete" value="yes">supprimer</button>
        <a href="list_film.php">revenir à la liste</a>
    </p>
</form>

</body>
</html>