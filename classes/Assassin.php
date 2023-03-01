<?php
class Assassin extends Monstre{
    public $nom = 'Assassin';
    public $face = "images/assassin.gif";
    public $pv;
    public $atk;
    public $arm;
    public $man;
    public $regman;
    public $comp1;
    public $comp2;

    public function __construct()
    {
        parent::__construct(100, 12, 1, 10, 1, "Dague mortelle",  "Danse lame");
    }

    public function competence1($p){
        $r= random_int(1,6);
        return "Ton adversaire attaque avec une dague empoisonnée, tu subis " . $p->perdrePV($this->atk) . " dégats + ". $p->perdrePVbrut($r) . " dégats de poison";
    }
    public function competence2($p){
        return "Ton adversaire augmente son attaque de " . $this->atk=$this->atk+3;
    }
    }

?>
