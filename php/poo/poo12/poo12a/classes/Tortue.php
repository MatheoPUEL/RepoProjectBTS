<?php

class Tortue
{
    private $id_tortue;
    private $nom;
    private $surnom;
    private $couleur;

    public $colors = ["bleu", "orange", "violet", "rouge", "vert", "marron", "rose", "blanc", "jaune"];


    function __construct($nom = "???")
    {
        $this->SetNom($nom);
    }


    function NomComplet()
    {
        return $this->GetNom() . " dit " . $this->GetSurnom();
    }
    function afficher()
    {
        ?>
        <ul>
            <li>id_tortue=<?= $this->GetId() ?></li>
            <li>nom=<?= $this->GetNom() ?></li>
            <li>surnom=<?= $this->GetSurnom() ?></li>
            <li>couleur=<?= $this->GetCouleur() ?></li>
        </ul>
        <?php
    }
    function GetId()
    {
        return $this->id_tortue;
    }
    function SetNom($nom)
    {
        $this->nom = $nom;
    }
    function GetNom()
    {
        return $this->nom;
    }
    function SetSurnom($surnom)
    {
        $this->surnom = $surnom;
    }
    function GetSurnom()
    {
        return $this->surnom;
    }
    function SetCouleur($setcolor)
    {
        if (in_array($setcolor, $this->colors)) {
            $this->couleur = $setcolor;
        } else {
            echo '<p class="erreur">Erreur, la couleur doit être parmi bleu, orange, violet, rouge, vert, marron, rose, blanc, jaune</p>';
            exit;
        }
    }
    function GetCouleur()
    {
        return $this->couleur;
    }
}
