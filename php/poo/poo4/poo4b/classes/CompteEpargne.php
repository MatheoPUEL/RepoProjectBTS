<?php
class CompteEpargne extends Compte {

    private $taux_interet = 0;
    public function __construct($titulaire, $solde, $taux_interet) {
        parent::__construct($titulaire, $solde);
        $this->set_taux_interet($taux_interet);
    }

    public function set_taux_interet($taux_interet) {
        $this->taux_interet = $taux_interet;
    }
    function get_taux_interet() {
        return $this->taux_interet;
      }
    
    function calculer_interet() {
        $this->set_solde($this->get_solde + $this->get_solde * $this->taux_interet);
    }

    function afficher() {
        echo "paramètres du compte d'épargne de " . $this->get_titulaire();
        echo '<div>' . PHP_EOL;
        echo "<ul>" . PHP_EOL;
        echo "<li>Devise : " . $this->get_devise() . "</li>" ;
        echo "<li>Solde : " . $this->get_lib_solde() . "</li>";
        echo "<li>Titulaire : " . $this->get_titulaire() . "</li>" . PHP_EOL;
        echo "<li>Taux intérêt : " . $this->get_taux_interet() . "</li>" . PHP_EOL;
        echo "</ul>" . PHP_EOL;
        echo '</div>' . PHP_EOL;
      }
}
?>