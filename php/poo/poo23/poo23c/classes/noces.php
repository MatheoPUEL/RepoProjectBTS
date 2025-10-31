<?php

class Noces {
    private static $compteur = 0;
    private $id;
    private $duree;
    private $libelle;
    static array $tableau = [];

    function __construct($tableau = null) {
        self::$compteur++;
        $this->id = self::$compteur;
        if($tableau != null) {
            $this->fill($tableau);
        }
    }
    public function fill($tableau){
        foreach ($tableau as $cle => $valeur) {
            $methode = 'set_' . $cle;
            if (method_exists($this, $methode)) {
            $this->$methode($valeur);
            }
        }
    }

    public function dump() {
        return get_object_vars($this);
    }

    public function __toString() {
        return $this->get_libelle();
    }
    function afficher() {
        ?>
        <p>--- Description des noces d'id <?= $this->get_id(); ?> ---</p>
        <ul>
            <?php
                $html = '<ul>';
                $props = $this->dump();
                foreach ($props as $key => $value) {
                    $methode = 'get_' . $key;
                    $html .= '<li>' . $key . ' = ' . $this->$methode() . '</li>';
                }
                $html .= '</ul>';
                echo $html;
            ?>
        </ul>
        <?php
    }

    function get_id() {
        return $this->id;
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