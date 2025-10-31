<?php

class Noces {
    private static $compteur = 0;
    private $id_noce;
    private $duree;
    private $libelle;

    function __construct($duree, $libelle) {
        self::$compteur++;
        $this->id_noce = self::$compteur;
        $this->duree = $duree;
        $this->libelle = $libelle;
    }

    function afficher() {
        ?>
        <p>--- Description des noces d'id <?= $this->get_id(); ?> ---</p>
        <ul>
            <li>id_noces : <?= $this->id_noce ?></li>
            <li>Durée : <?= $this->duree ?></li>
            <li>Libellé : <?= $this->libelle ?></li>
        </ul>
        <?php
    }

    function get_id() {
        return $this->id_noce;
    }
    function set_id($id) {
        $this->$id = $id;
    }

    function get_duree() {
        return $this->duree;
    }
    function set_duree($duree){
        $this->duree = $duree;
    } 

    function get_libelle() {
        return $this->libelle;
    }
    function set_libelle($libelle) {
        $this->libelle = $libelle;
    }

}