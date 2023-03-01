<?php
class Mage extends Hero{
    public $face = "images/mage.gif";
    public $pv;
    public $atk;
    public $arm;
    public $man;
    public $regman;
    public $comp1;
    public $comp2;

    public function __construct()
    {
        parent::__construct(100, 6, 3, 20, 2, "Eclats magiques",  "Désintégration");
    }
    public function competence1($m){
        return "Tu attaque avec une magie de 20, ton adversaire subit " . $m->perdrePVbrut(20) . " dégats";
    }
    public function competence2($m){
        $r= random_int(1,50);

        return "Tu attaque avec une magie de " .$r.", ton adversaire subit " . $m->perdrePVbrut($r) . " dégats";
    }
    public function toString() {
        return "Mage";
    }
}
?>
