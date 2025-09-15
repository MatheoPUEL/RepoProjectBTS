<?php

class Voiture {
    public $marque;
    public $nom;
    public $modele;
    public $compteur = 0;
    public $aDemarre = false;
    
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
        echo "<p><b>-- Voiture " . $this->marque . " " . $this->modele
        . " --</b></p>";
        echo "<ul>";
        echo "<li> Nom : " . $this->nom . "</li>";
        echo "<li> Modele : " . $this->modele . "</li>";
        echo "<li> Marque : " . $this->marque . "</li>";
        echo "<li> Compteur : " . $this->compteur . "</li>";
         if ($this->aDemarre() == true){echo "<li>La voiture est allumé</li>";} else {echo "<li>le moteur est etteint</li>";};
        echo "</ul>";
    }
}