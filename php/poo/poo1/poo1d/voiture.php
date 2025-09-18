<?php

class Voiture {
    public $marque;
    public $nom;
    public $modele;
    public $compteur;
    public $aDemarre;
    
    // 🔹 Constructeur
    function __construct($nom) {
        $this->nom = $nom;       // on donne la valeur passée en paramètre
        $this->marque = "???";  // valeur par défaut
        $this->modele = "???";  // valeur par défaut
        $this->compteur = 0;         // compteur démarre à 0
        $this->aDemarre = false;     // moteur éteint par défaut
    }
    function __destruct() {
        echo "<li>Le moteur est mort</li>";
    }
    function ADemarre() {
        $this->aDemarre = true;
    }

    function avancer ($km) {
        $this->compteur = $this->compteur + $km;
    }

    function arreter() {
        $this->aDemarre = false;
    }

    function afficher() {
        echo "<p><b>-- Voiture " . $this->marque . " " . $this->modele . " --</b></p>";
        echo "<ul>";
        echo "<li> Nom : " . $this->nom . "</li>";
        echo "<li> Modele : " . $this->modele . "</li>";
        echo "<li> Marque : " . $this->marque . "</li>";
        echo "<li> Compteur : " . $this->compteur . "</li>";
        if ($this->aDemarre) {
            echo "<li>La voiture est allumée</li>";
        } else {
            echo "<li>Le moteur est éteint</li>";
        }
        echo "</ul>";
    }
}