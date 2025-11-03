<?php

class Compte {

    private $devise = "€";
    private $solde = 0;
    private $titulaire = null;


    function __construct($titulaire, $solde) {
        echo "<h3 class='commande'>Commande : Créer le compte de " . $this->titulaire ."</h3>";

        $this->solde = $solde;
        $this->titulaire = $titulaire;
        echo "<h3 class='reponse'>Réponse : Créer le compte de " . $this->titulaire ."</h3>";
    }
    function __destruct() {
        echo "<h3 class='reponse'>Réponse: Adieu...</h3>";
    }
    function set_devise($devise) {
        if($devise == "$" || $devise == "€") {
            $this->devise = $devise;
        } else {
            echo "<h3 class='erreur'>Erreur : la devise doit être € ou $ : $devise </h3>";
        }
    }
    function set_solde($solde) {
        $this->solde = $solde;
    }
    function set_titulaire($titulaire) {
        $this->titulaire = $titulaire;
    }
    

    function crediter($montant){
        $newsolde = $this->solde + $montant;
        $this->set_solde($newsolde);
        echo "<h3 class='commande'>Commande : crediter ".$montant. " " . $this->devise ."</h3>";
    }
    function debiter($montant) {
        echo "<h3 class='commande'>Commande : debiter ".$montant. " " . $this->devise ."</h3>";
        if ($this->solde > $montant) {
            $this->set_solde($montant);
        } else {
            echo "<h3 class='erreur'>Erreur: le solde doit être >=0 : ". $this->solde - $montant ."</h3>";
        }
    }

    function afficher() {
        echo "<h3 class='commande'>Commande : paramètres du compte de " . $this->titulaire ."</h3>";
        echo "
            <ul>
            <li> Devise: ". $this->devise. "</li>
            <li> Solde: ". $this->solde . " ". $this->devise . "</li>
            <li> Titulaire: ". $this->titulaire ."</li>
            </ul>
        ";
    }
}