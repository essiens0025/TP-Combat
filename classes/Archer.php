<?php
class Archer extends Hero{
    public $face = "images/archer.gif";
    public $pv;
    public $atk;
    public $arm;
    public $man;
    public $regman;
    public $comp1;
    public $comp2;

    public function __construct()
    {
        parent::__construct(100, 13, 2, 10, 1, "Flèche perforente",  "Multi-flèches");
    }

    public function competence1($m){
        return "Tu attaque avec une flèche perforante, ton adversaire subit " . $m->perdrePVbrut($this->atk) . " dégats";
    }
    public function competence2($m){
        $r= random_int(1,5);

        return "Tu attaque avec des flèches ".$r." fois , ton adversaire subit " . $m->perdrePV($this->atk*$r) . " dégats";
    }
    public function toString() {
        return "Archer";
    }
}
?>
