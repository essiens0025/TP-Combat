<?php

class Sorcier extends Monstre{
    public $face = "images/sorcier.gif";
    public $pv;
    public $atk;
    public $arm;
    public $man;
    public $regman;
    public $comp1;
    public $comp2;


    public function __construct()
    {
        parent::__construct(100, 6, 0, 20, 3, "Eclat magique",  "Soin");
    }
    

    public function competence1($p){
        return "Ton adversaire attaque avec une magie de 20, tu subit " . $p->perdrePVbrut(20) . " dégats";
    }
    public function competence2($p){
        $this->pv = $this->pv+30;
        return "Ton adversaire se soigne 30 pv";
    }
}
?>
