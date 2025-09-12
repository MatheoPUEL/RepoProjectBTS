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

    // Si le formulaire est soumis, on met à jour le film
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupération des nouvelles données
        $titre = $_POST['titre'];
        $realisateur = $_POST['realisateur'];
        $annee = $_POST['annee'];

        // Mise à jour du film dans la base de données
        if (!empty($titre) && !empty($realisateur) && !empty($annee)) {
            $sql_update = "UPDATE film SET titre = :titre, realisateur = :realisateur, annee = :annee WHERE id_film = :id_film";
            $stmt_update = $dbh->prepare($sql_update);
            $stmt_update->bindParam(':titre', $titre);
            $stmt_update->bindParam(':realisateur', $realisateur);
            $stmt_update->bindParam(':annee', $annee);
            $stmt_update->bindParam(':id_film', $id_film, PDO::PARAM_INT);
            $stmt_update->execute();

            echo "<p>Film mis à jour avec succès !</p>";
        } else {
            echo "<p>Tous les champs doivent être remplis.</p>";
        }
    }
} else {
    die("ID du film manquant ou invalide.");
}
?>

<h2>Modifier le film</h2>
<form action="edit_film.php?id=<?= $id_film ?>" method="POST">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($film['titre']); ?>" required><br><br>
    
    <label for="realisateur">Réalisateur :</label>
    <input type="text" id="realisateur" name="realisateur" value="<?= htmlspecialchars($film['realisateur']); ?>" required><br><br>
    
    <label for="annee">Année :</label>
    <input type="number" id="annee" name="annee" value="<?= htmlspecialchars($film['annee']); ?>" required><br><br>
    
    <button type="submit">Mettre à jour le film</button>
</form>

</body>
</html>
