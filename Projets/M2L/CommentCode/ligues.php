<?php
// Démarrage de la session pour accéder aux variables de session
session_start();
// Variable globale à la page (commentaire original mais aucune variable n'est déclarée après)

// Vérification si l'ID de la ligue est présent dans l'URL
if(isset($_GET['id'])) {
    // Inclusion du fichier de connexion à la base de données
    require_once('./bdd/bdd_co.php');
    // Connexion à la base de données
    $dbh = db_connect();
    // Requête SQL pour récupérer les informations de la ligue
    $sql_ligue = "SELECT * FROM ligue WHERE id_ligue = :id";
    try {
        // Préparation et exécution de la requête
        $sth = $dbh->prepare($sql_ligue);
        $sth->execute([":id" => $_GET['id']]);
        // Récupération des données de la ligue
        $ligueData = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        // Gestion des erreurs de requête SQL
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    // Stockage de l'ID et de l'image de la ligue dans des variables
    $idligue = $ligueData['id_ligue'];
    $image = $ligueData['image'];

    // Vérification si l'utilisateur est connecté et appartient à la ligue ou est un administrateur global (ligue 1)
    if(isset($_SESSION['ligue']) && $_SESSION['ligue'] == $idligue || $_SESSION['ligue'] == 1) {
        // Définition des variables pour le titre et la description de la page
        $title = $ligueData['lib_ligue'];
        $description = $ligueData['description'];
    } else {
        // Redirection vers la page d'accueil si l'utilisateur n'a pas les droits
        header('Location: ./index.php');
    }

    // Redirection vers la page d'administration si l'ID de la ligue est 1 (ligue admin)
    if ($_GET['id'] == 1) {
        header('Location: ./admin_all_ligues.php');
    }
} else {
    // Redirection vers la page d'accueil si aucun ID n'est fourni
    header('Location: ./index.php');
}

// Texte explicatif pour la section FAQ
$faq = "Si vous souhaitez avoir des précisions sur la ligue ou nous poser une question, n'hésitez pas, nous y répondrons dans les plus brefs délais. <br><small>*Si votre question ne respecte pas les règles du site ou n'est pas posée dans la bonne section du site, celle-ci sera supprimée.</small>";
?>

<?php
    // Inclusion de l'en-tête du site
    require_once('./inc/header.inc.php')
?>
    <!-- En-tête de la page avec le titre et l'image de la ligue -->
    <header>
        <div>
            <div style="display: flex; flex-direction: row;">
                <h1><?= $title ?></h1>
                <img class="right" src="./img/svg/Leftcorner.svg" alt="">
            </div>
            <img class="bottom" src="./img/svg/Bottomcorner.svg" alt="">
        </div>
        <img class="img-header" src="./img/<?=$image?>" style=" object-fit: cover;" alt="">
    </header>

    <!-- Section des services (non implémentée) -->
    <section class="services" id="services">
        <h1>Services</h1>
        <p>En cours de dev</p>
    </section>

    <!-- Section de localisation avec carte Google Maps -->
    <section class="grid-location" id="localisation">
        <div class="content-loc">
            <h1>Localisation</h1>
            <p><?= $description ?></p>
        </div>
        <div class="media-loc">
            <iframe width="650" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=450&amp;height=450&amp;hl=en&amp;q=13%20Rue%20Jean%20Moulin,%2054510%20Tomblaine+(Maison%20des%20ligues)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </section>

    <!-- Section FAQ avec formulaire pour poser une question -->
    <section class="FAQ" id="faq">
        <div class="content-faq">
            <form method="post" action="./form/addMessage.form.php?id=<?=$_GET['id']?>">
                <textarea name="question" id="question" rows="10" cols="35" placeholder="Votre message"></textarea>
                <button class="button">Envoyer</button>
            </form>
        </div>
        <div class="media-faq">
            <h1>FAQ</h1>
            <h3><?= $faq ?></h3>
        </div>
    </section>

    <!-- Section affichant les questions déjà posées et leurs réponses -->
    <section class="questions" id="questions">
         <h1>Les questions déjà posées</h1>
            <!-- A répeter pour le foreach des questions -->
            <!-- ajouter la classe no-response si il y a pas de réponse a la question qui est posé -->

        <?php
        // Connexion à la base de données pour récupérer les questions
        require_once ('./bdd/bdd_co.php');
        $dbh = db_connect();
        // Requête SQL pour récupérer les questions, réponses et informations utilisateurs
        $sql = "SELECT faq.id_faq, faq.question, faq.reponse, faq.dat_question, faq.dat_reponse, user.pseudo, faq.id_user
                FROM faq 
                INNER JOIN user on faq.id_user = user.id_user
                WHERE user.id_ligue = :idligue
                ORDER BY faq.dat_question desc;";
        try {
            // Préparation et exécution de la requête
            $sth = $dbh->prepare($sql);
            $sth->execute([":idligue"=>$_GET['id']]);
            // Récupération de toutes les questions
            $rows= $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            // Gestion des erreurs de requête SQL
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }

        // Affichage des questions si elles existent
        if (count($rows) > 0) {
            foreach($rows as $row){
                // Formatage de la date de la question
                $dat_question = new DateTime($row['dat_question']);
                $dat_dmy = $dat_question->format('d-m-Y');
                $dat_mh = $dat_question->format('H:i')
                ?>
                <!-- Affichage de la question -->
                <div class="question-post">
                    <div class="question-header">
                        
                            <div><p><?= $row['pseudo'] ?> <?php if ($row['id_user'] == $_SESSION['usertype'] > 1  ){ ?><a href="./form/deleteMessage.form.php?idfaq=<?=$row['id_faq']?>&idligue=<?=$_GET['id']?>"> - Supprimer</a><a href="./editMessage.php?idfaq=<?=$row['id_faq']?>"> - Modifier</a><?php } ?> <?php if ($_SESSION['usertype'] > 1 && $row['reponse'] == null ){ ?><a href="./admin_respond.php?idfaq=<?=$row['id_faq']?>"> - Répondre</a><?php } ?></p></div>
                            <ul class="question-date_info">
                                <li><?= $dat_dmy ?></li>
                                <li><?= $dat_mh ?></li>
                            </ul>
                        
                    </div>
                    <p><?= $row['question'] ?></p>
                </div>

                <?php
                // Affichage de la réponse si elle existe
                if ($row['reponse'] != "") {
                    // Formatage de la date de la réponse
                    $dat_reponse = new DateTime($row['dat_reponse']);
                    $dat_dmy = $dat_reponse->format('d-m-Y');
                    $dat_mh = $dat_reponse->format('H:m')
                    ?>
                    <!-- Affichage de la réponse -->
                    <div class="response">
                        <div class="question-header">
                            <div><p>Admin</p></div>
                            <div>
                                <ul class="question-date_info">
                                    <li><?= $dat_dmy ?></li>
                                    <li><?= $dat_mh ?></li>
                                </ul>
                            </div>
                        </div>
                        <p><?= $row['reponse'] ?></p>
                    </div>
                    <?php
                }
            }
        }
        ?>

                

    </section>
<?php
    // Inclusion du pied de page du site
    require_once('./inc/footer.inc.php')
?>