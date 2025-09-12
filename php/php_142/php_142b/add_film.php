<?php
require_once('header.inc.php');
require_once('./functions/db_functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $titre = $_POST['titre'];
    $realisateur = $_POST['realisateur'];
    $annee = $_POST['annee'];

    // Vérification que tous les champs sont remplis
    if (!empty($titre) && !empty($realisateur) && !empty($annee)) {
        // Connexion à la base de données
        $dbh = db_connect();
        $sql = "INSERT INTO film (titre, realisateur, annee) VALUES (:titre, :realisateur, :annee)";
        
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':realisateur', $realisateur);
            $stmt->bindParam(':annee', $annee);
            $stmt->execute();
            
            // Message de confirmation
            echo "<p>Film ajouté avec succès !</p>";
        } catch (PDOException $ex) {
            echo "<p>Erreur : " . $ex->getMessage() . "</p>";
        }
    } else {
        echo "<p>Tous les champs doivent être remplis.</p>";
    }
}
?>

<h2>Ajouter un film</h2>
<form action="add_film.php" method="POST">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required><br><br>
    
    <label for="realisateur">Réalisateur :</label>
    <input type="text" id="realisateur" name="realisateur" required><br><br>
    
    <label for="annee">Année :</label>
    <input type="date" id="annee" name="annee" required><br><br>
    
    <button type="submit">Ajouter le film</button>
</form>

</body>
</html>