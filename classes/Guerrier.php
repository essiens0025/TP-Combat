<?php
class Guerrier extends Hero{
    public $face = "images/guerrier.gif";
    public $pv;
    public $atk;
    public $arm;
    public $man;
    public $regman;
    public $comp1;
    public $comp2;

  
        public function __construct()
        {
            parent::__construct(150, 8, 5, 10, 1, "Frappe lourde",  "Cri de guerre");
        }
        
     
    public function competence1($m){
        return "Tu inflige une attaque lourde de " . $this->atk+5 . ", ton adversaire subit " . $m->perdrePV($this->atk+5) . " dégats";
    }
    public function competence2($m){
        return "Tu augmentes ton armure de " . $this->arm=$this->arm+3;
    }
    public function toString() {
        return "Guerrier";
    }
}
?>
